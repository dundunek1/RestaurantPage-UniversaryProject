<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Stolik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StolikController extends Controller
{
    public function index()
    {
        try {
            $stoliki = Stolik::all();
            
            return response()->json([
                'status' => 'success',
                'data' => $stoliki
            ]);
        } catch (\Exception $e) {
            Log::error('Błąd w index: ' . $e->getMessage());
            
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas pobierania stolików.'
            ], 500);
        }
    }
    
    public function show($id)
    {
        try {
            $stolik = Stolik::findOrFail($id);
            
            return response()->json([
                'status' => 'success',
                'data' => $stolik
            ]);
        } catch (\Exception $e) {
            Log::error('Błąd w show: ' . $e->getMessage());
            
            return response()->json([
                'status' => 'error',
                'message' => 'Stolik nie został znaleziony.'
            ], 404);
        }
    }
    
    public function checkAvailability(Request $request)
    {
        try {
            // Pobierz parametry z zapytania
            $data = $request->input('data', date('Y-m-d'));
            $godzina = $request->input('godzina', '12:00');
            
            // Pobierz wszystkie stoliki
            $stoliki = Stolik::where('status', 'aktywny')->get();
            
            $result = [];
            
            // Sprawdź dostępność każdego stolika
            foreach ($stoliki as $stolik) {
                // Sprawdź, czy stolik jest już zarezerwowany
                $zarezerwowany = DB::table('rezerwacje')
                    ->where('stolik_id', $stolik->id)
                    ->where('data', $data)
                    ->where(function ($query) use ($godzina) {
                        $query->where(function ($q) use ($godzina) {
                            $q->where('godzina', '<=', $godzina)
                              ->whereRaw("ADDTIME(godzina, '2:00:00') > ?", [$godzina]);
                        })
                        ->orWhere(function ($q) use ($godzina) {
                            $q->where('godzina', '>=', $godzina)
                              ->whereRaw("godzina < ADDTIME(?, '2:00:00')", [$godzina]);
                        });
                    })
                    ->where('status', '!=', 'anulowana')
                    ->exists();
                
                $result[] = [
                    'id' => $stolik->id,
                    'numer' => $stolik->numer,
                    'pojemnosc' => $stolik->pojemnosc,
                    'opis' => $stolik->opis,
                    'dostepny' => !$zarezerwowany
                ];
            }
            
            return response()->json([
                'status' => 'success',
                'data' => [
                    'data' => $data,
                    'godzina' => $godzina,
                    'stoliki' => $result
                ]
            ]);
        } catch (\Exception $e) {
            Log::error('Błąd w checkAvailability: ' . $e->getMessage());
            
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas sprawdzania dostępności stolików.'
            ], 500);
        }
    }
}
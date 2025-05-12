<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rezerwacja;
use App\Models\Stolik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RezerwacjaController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Walidacja danych
            $request->validate([
                'imie' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'telefon' => 'nullable|string|max:20',
                'liczba_osob' => 'required|integer|min:1|max:20',
                'data' => 'required|date',
                'godzina' => 'required|date_format:H:i',
                'stolik_id' => 'required|integer|exists:stoliki,id',
                'wiadomosc' => 'nullable|string|max:1000',
            ]);
            
            // Sprawdzenie dostępności stolika
            $stolik = Stolik::findOrFail($request->stolik_id);
            
            // Sprawdzenie czy liczba osób nie przekracza pojemności stolika
            if ($request->liczba_osob > $stolik->pojemnosc) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Liczba gości przekracza pojemność wybranego stolika.'
                ], 422);
            }
            
            // Sprawdzenie czy stolik jest dostępny w wybranym terminie
            $zarezerwowany = DB::table('rezerwacje')
                ->where('stolik_id', $stolik->id)
                ->where('data', $request->data)
                ->where(function ($query) use ($request) {
                    $query->where(function ($q) use ($request) {
                        $q->where('godzina', '<=', $request->godzina)
                          ->whereRaw("ADDTIME(godzina, '2:00:00') > ?", [$request->godzina]);
                    })
                    ->orWhere(function ($q) use ($request) {
                        $q->where('godzina', '>=', $request->godzina)
                          ->whereRaw("godzina < ADDTIME(?, '2:00:00')", [$request->godzina]);
                    });
                })
                ->where('status', '!=', 'anulowana')
                ->exists();
            
            if ($zarezerwowany) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Wybrany stolik jest już zarezerwowany w tym terminie.'
                ], 422);
            }
            
            // Tworzenie nowej rezerwacji
            $rezerwacja = Rezerwacja::create([
                'imie' => $request->imie,
                'email' => $request->email,
                'telefon' => $request->telefon,
                'liczba_osob' => $request->liczba_osob,
                'data' => $request->data,
                'godzina' => $request->godzina,
                'stolik_id' => $request->stolik_id,
                'wiadomosc' => $request->wiadomosc,
                'status' => 'oczekujaca'
            ]);
            
            return response()->json([
                'status' => 'success',
                'message' => 'Rezerwacja została przyjęta pomyślnie. Wkrótce się z Tobą skontaktujemy.',
                'data' => $rezerwacja
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Dane rezerwacji są nieprawidłowe.',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            Log::error('Błąd w store: ' . $e->getMessage());
            
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas zapisywania rezerwacji.'
            ], 500);
        }
    }
    
}
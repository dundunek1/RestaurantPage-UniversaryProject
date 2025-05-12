<?php

namespace App\Http\Controllers;

use App\Models\Rezerwacja;
use App\Models\Stolik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  
    public function getReservations()
    {
        try {
            $rezerwacje = Rezerwacja::with('stolik')
                ->orderBy('created_at', 'desc')
                ->get();
            
            return response()->json([
                'status' => 'success',
                'data' => $rezerwacje
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas pobierania rezerwacji: ' . $e->getMessage()
            ], 500);
        }
    }

   
    public function updateStatus(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required|exists:rezerwacje,id',
                'status' => 'required|in:oczekujaca,potwierdzona,anulowana'
            ]);

            $rezerwacja = Rezerwacja::findOrFail($request->id);
            $rezerwacja->status = $request->status;
            $rezerwacja->save();
            
            return response()->json([
                'status' => 'success',
                'message' => 'Status rezerwacji został zaktualizowany.',
                'data' => $rezerwacja
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas aktualizacji statusu: ' . $e->getMessage()
            ], 500);
        }
    }

  
    public function addTestReservation()
    {
        try {
            
            $stolik = Stolik::first();
            
            if (!$stolik) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Brak stolików w bazie danych.'
                ], 400);
            }
            
            
            $rezerwacja = Rezerwacja::create([
                'imie' => 'Jan Testowy',
                'email' => 'jan.testowy@example.com',
                'telefon' => '123456789',
                'liczba_osob' => min($stolik->pojemnosc, 4),
                'data' => date('Y-m-d', strtotime('+1 day')),
                'godzina' => '18:00',
                'stolik_id' => $stolik->id,
                'wiadomosc' => 'To jest testowa rezerwacja',
                'status' => 'oczekujaca'
            ]);
            
            return response()->json([
                'status' => 'success',
                'message' => 'Testowa rezerwacja została dodana.',
                'data' => $rezerwacja
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas dodawania testowej rezerwacji: ' . $e->getMessage()
            ], 500);
        }
    }

   
    public function clearReservations()
    {
        try {
            $count = Rezerwacja::count();
            Rezerwacja::truncate();
            
            return response()->json([
                'status' => 'success',
                'message' => "Usunięto wszystkie rezerwacje ($count)."
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas usuwania rezerwacji: ' . $e->getMessage()
            ], 500);
        }
    }

   
    public function getStats()
    {
        try {
            $totalReservations = Rezerwacja::count();
            $pendingReservations = Rezerwacja::where('status', 'oczekujaca')->count();
            $confirmedReservations = Rezerwacja::where('status', 'potwierdzona')->count();
            $cancelledReservations = Rezerwacja::where('status', 'anulowana')->count();
            
            $todayReservations = Rezerwacja::whereDate('data', date('Y-m-d'))->count();
            $futureReservations = Rezerwacja::whereDate('data', '>', date('Y-m-d'))->count();
            
            $tables = Stolik::count();
            
            return response()->json([
                'status' => 'success',
                'data' => [
                    'total_reservations' => $totalReservations,
                    'pending_reservations' => $pendingReservations,
                    'confirmed_reservations' => $confirmedReservations,
                    'cancelled_reservations' => $cancelledReservations,
                    'today_reservations' => $todayReservations,
                    'future_reservations' => $futureReservations,
                    'tables' => $tables
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd podczas pobierania statystyk: ' . $e->getMessage()
            ], 500);
        }
    }
}
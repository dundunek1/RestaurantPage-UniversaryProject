<?php

use App\Http\Controllers\Api\RezerwacjaController;
use App\Http\Controllers\Api\StolikController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint testowy
Route::get('/test', function() {
    return ['message' => 'API działa poprawnie!'];
});

// Endpoint do sprawdzania dostępności stolików (musi być przed /stoliki/{id})
Route::get('/stoliki/dostepnosc', [StolikController::class, 'checkAvailability']);

// Endpoint do pobierania szczegółów stolika
Route::get('/stoliki/{id}', [StolikController::class, 'show']);

// Endpoint do pobierania wszystkich stolików
Route::get('/stoliki', [StolikController::class, 'index']);

// Endpoint do obsługi rezerwacji
Route::post('/rezerwacje', [RezerwacjaController::class, 'store']);

// Trasy dla AdminController
Route::get('/admin/rezerwacje', [AdminController::class, 'getReservations']);
Route::post('/admin/rezerwacje/status', [AdminController::class, 'updateStatus']);
Route::post('/admin/rezerwacje/test', [AdminController::class, 'addTestReservation']);
Route::delete('/admin/rezerwacje', [AdminController::class, 'clearReservations']);
Route::get('/admin/stats', [AdminController::class, 'getStats']);
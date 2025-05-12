<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Przekierowanie strony głównej na home.html
Route::get('/', function () {
    return redirect('home.html');
});

// Prosta trasa testowa
Route::get('/test', function () {
    return ['message' => 'Web routes work!'];
});

// Zwróć uwagę, że tutaj NIE MA trasy catch-all, która by przechwyciła wszystkie żądania
// i przekierowywała je do home.html, co powodowało problem z API
<?php

namespace Database\Seeders;

use App\Models\Stolik;
use Illuminate\Database\Seeder;

class StolikSeeder extends Seeder
{
    public function run(): void
    {
        $stoliki = [
            ['numer' => 1, 'pojemnosc' => 4, 'pozycja_x' => 60, 'pozycja_y' => 80, 'opis' => 'Stolik 1 (4 osoby)'],
            ['numer' => 2, 'pojemnosc' => 2, 'pozycja_x' => 200, 'pozycja_y' => 80, 'opis' => 'Stolik 2 (2 osoby)'],
            ['numer' => 3, 'pojemnosc' => 4, 'pozycja_x' => 340, 'pozycja_y' => 80, 'opis' => 'Stolik 3 (4 osoby)'],
            ['numer' => 4, 'pojemnosc' => 2, 'pozycja_x' => 480, 'pozycja_y' => 80, 'opis' => 'Stolik 4 (2 osoby)'],
            ['numer' => 5, 'pojemnosc' => 6, 'pozycja_x' => 620, 'pozycja_y' => 80, 'opis' => 'Stolik 5 (6 osób)'],
            ['numer' => 6, 'pojemnosc' => 4, 'pozycja_x' => 60, 'pozycja_y' => 230, 'opis' => 'Stolik 6 (4 osoby)'],
            ['numer' => 7, 'pojemnosc' => 8, 'pozycja_x' => 200, 'pozycja_y' => 230, 'opis' => 'Stolik 7 (8 osób)'],
            ['numer' => 8, 'pojemnosc' => 2, 'pozycja_x' => 340, 'pozycja_y' => 230, 'opis' => 'Stolik 8 (2 osoby)'],
            ['numer' => 9, 'pojemnosc' => 4, 'pozycja_x' => 480, 'pozycja_y' => 230, 'opis' => 'Stolik 9 (4 osoby)'],
            ['numer' => 10, 'pojemnosc' => 2, 'pozycja_x' => 620, 'pozycja_y' => 230, 'opis' => 'Stolik 10 (2 osoby)'],
            ['numer' => 11, 'pojemnosc' => 6, 'pozycja_x' => 60, 'pozycja_y' => 380, 'opis' => 'Stolik 11 (6 osób)'],
            ['numer' => 12, 'pojemnosc' => 4, 'pozycja_x' => 200, 'pozycja_y' => 380, 'opis' => 'Stolik 12 (4 osoby)'],
            ['numer' => 13, 'pojemnosc' => 2, 'pozycja_x' => 340, 'pozycja_y' => 380, 'opis' => 'Stolik 13 (2 osoby)'],
            ['numer' => 14, 'pojemnosc' => 4, 'pozycja_x' => 480, 'pozycja_y' => 380, 'opis' => 'Stolik 14 (4 osoby)'],
            ['numer' => 15, 'pojemnosc' => 2, 'pozycja_x' => 620, 'pozycja_y' => 380, 'opis' => 'Stolik 15 (2 osoby)'],
        ];
        
        foreach ($stoliki as $stolik) {
            Stolik::create($stolik);
        }
    }
}
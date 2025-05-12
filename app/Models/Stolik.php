<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stolik extends Model
{
    use HasFactory;

    protected $table = 'stoliki';

    protected $fillable = [
        'numer',
        'pojemnosc',
        'pozycja_x',
        'pozycja_y',
        'opis',
        'status',
    ];

    protected $casts = [
        'numer' => 'integer',
        'pojemnosc' => 'integer',
        'pozycja_x' => 'integer',
        'pozycja_y' => 'integer',
    ];

    public function rezerwacje(): HasMany
    {
        return $this->hasMany(Rezerwacja::class);
    }
}
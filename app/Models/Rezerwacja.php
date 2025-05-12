<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rezerwacja extends Model
{
    use HasFactory;

    protected $table = 'rezerwacje';

    protected $fillable = [
        'imie',
        'email',
        'telefon',
        'liczba_osob',
        'data',
        'godzina',
        'stolik_id',
        'wiadomosc',
        'status',
    ];

    protected $casts = [
        'liczba_osob' => 'integer',
        'stolik_id' => 'integer',
        'data' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function stolik(): BelongsTo
    {
        return $this->belongsTo(Stolik::class);
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rezerwacje', function (Blueprint $table) {
            $table->id();
            $table->string('imie');
            $table->string('email');
            $table->string('telefon')->nullable();
            $table->unsignedSmallInteger('liczba_osob');
            $table->date('data');
            $table->time('godzina');
            $table->foreignId('stolik_id')->constrained('stoliki');
            $table->text('wiadomosc')->nullable();
            $table->enum('status', ['oczekujaca','potwierdzona','anulowana'])->default('oczekujaca');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rezerwacje');
    }
};
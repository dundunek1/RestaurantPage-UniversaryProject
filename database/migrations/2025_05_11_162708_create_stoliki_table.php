<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stoliki', function (Blueprint $table) {
            $table->id();
            $table->integer('numer')->unique();
            $table->integer('pojemnosc');
            $table->integer('pozycja_x');
            $table->integer('pozycja_y');
            $table->string('opis')->nullable();
            $table->enum('status', ['aktywny','nieaktywny'])->default('aktywny');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stoliki');
    }
};
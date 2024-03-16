<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nomes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 15)->nullable(false);
            $table->string('sobrenome', 30);
            $table->string('email', 30)->nullable(false);
            $table->string('senha', 20)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nomes');
    }
};

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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('ci',9);
            $table->string('nombres',50);
            $table->string('apellidos',30)->nullable();
            $table->string('celular',20);
            $table->string('email')->unique();
            $table->unsignedBigInteger('profesion_id');
            $table->foreign('profesion_id')->references('id')->on('profesiones')->name('fk_prof');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};

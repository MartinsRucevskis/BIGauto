<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('Razotajs');
            $table->string('Modelis');
            $table->string('Gads');
            $table->string('Piedzina');
            $table->string('Tilpums');
            $table->string('Atrumkarba');
            $table->string('VinKods');
            $table->string('Vietas');
            $table->string('Atrumu_skaits');
            $table->string('Degviela');
            $table->text('Apraksts');
            $table->string('Bilde');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};

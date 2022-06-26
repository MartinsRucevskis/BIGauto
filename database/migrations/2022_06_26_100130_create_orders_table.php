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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('Vards');
            $table->string('Uzvards');
            $table->string('Razotajs');
            $table->string('Modelis');
            $table->string('Gads');
            $table->string('Budzets');
            $table->string('Numurs');
            $table->string('Epasts');
            $table->string('Krasa');
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
        Schema::dropIfExists('orders');
    }
};

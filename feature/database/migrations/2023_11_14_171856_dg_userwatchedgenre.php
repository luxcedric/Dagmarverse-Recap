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
        Schema::create('dg_userwatchedgenre', function(Blueprint $table){
            $table->id('dg_ID');
            $table->integer('dg_timewatched');
            $table->unsignedBigInteger('dg_userID');
            $table->unsignedBigInteger('dg_genreID');
            $table->foreign('dg_userID')->references('dg_UUID')->on('dg_user');
            $table->foreign('dg_genreID')->references('dg_ID')->on('dg_genre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_userwatchedgenre');
    }
};

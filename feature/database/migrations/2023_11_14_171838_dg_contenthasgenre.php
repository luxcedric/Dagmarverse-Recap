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
        Schema::create('dg_contenthasgenre', function(Blueprint $table){
            $table->id('dg_ID');
            $table->unsignedBigInteger('dg_contentID');
            $table->unsignedBigInteger('dg_genreID');
            $table->foreign('dg_contentID')->references('dg_ID')->on('dg_content');
            $table->foreign('dg_genreID')->references('dg_ID')->on('dg_genre');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_contenthasgenre');
    }
};

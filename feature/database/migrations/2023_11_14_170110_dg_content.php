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
        Schema::create('dg_content', function(Blueprint $table){
            $table->id('dg_ID');
            $table->string('dg_name');
            $table->unsignedBigInteger('dg_creatorID');
            $table->foreign('dg_creatorID')->references('dg_ID')->on('dg_creator');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_content');
    }
};

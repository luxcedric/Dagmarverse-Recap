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
        Schema::create('dg_time', function(Blueprint $table){
            $table->id('dg_User_ID');
            $table->unsignedBigInteger('dg_jan');
            $table->unsignedBigInteger('dg_feb');
            $table->unsignedBigInteger('dg_mar');
            $table->unsignedBigInteger('dg_apr');
            $table->unsignedBigInteger('dg_mai');
            $table->unsignedBigInteger('dg_jun');
            $table->unsignedBigInteger('dg_jul');
            $table->unsignedBigInteger('dg_aug');
            $table->unsignedBigInteger('dg_sep');
            $table->unsignedBigInteger('dg_okt');
            $table->unsignedBigInteger('dg_nov');
            $table->unsignedBigInteger('dg_dez');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_time');
    }
};

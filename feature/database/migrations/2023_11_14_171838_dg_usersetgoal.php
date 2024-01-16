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
        Schema::create('dg_usersetgoal', function(Blueprint $table){
            $table->id('dg_ID');
            $table->unsignedBigInteger('dg_goalID');
            $table->unsignedBigInteger('dg_userID');
            $table->foreign('dg_goalID')->references('dg_ID')->on('dg_goals');
            $table->foreign('dg_userID')->references('dg_UUID')->on('dg_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_usersetgoal');
    }
};

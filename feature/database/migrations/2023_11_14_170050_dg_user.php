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
        Schema::create('dg_user', function(Blueprint $table){
            $table->id('dg_UUID');
            $table->timestamp('dg_registration');
            $table->string('dg_name');
            $table->integer('dg_points');
            $table->string('dg_currentgoals');
            $table->string('dg_formergoals');
            $table->integer('dg_time_jan')->default('0');
            $table->integer('dg_time_feb')->default('0');
            $table->integer('dg_time_mar')->default('0');
            $table->integer('dg_time_apr')->default('0');
            $table->integer('dg_time_may')->default('0');
            $table->integer('dg_time_jun')->default('0');
            $table->integer('dg_time_jul')->default('0');
            $table->integer('dg_time_sep')->default('0');
            $table->integer('dg_time_oct')->default('0');
            $table->integer('dg_time_nov')->default('0');
            $table->integer('dg_time_dec')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_user');
    }
};

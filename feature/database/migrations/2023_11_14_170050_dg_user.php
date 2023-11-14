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
            $table->integer('dg_time_jan');
            $table->integer('dg_time_feb');
            $table->integer('dg_time_mar');
            $table->integer('dg_time_apr');
            $table->integer('dg_time_may');
            $table->integer('dg_time_jun');
            $table->integer('dg_time_jul');
            $table->integer('dg_time_sep');
            $table->integer('dg_time_oct');
            $table->integer('dg_time_nov');
            $table->integer('dg_time_dec');
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

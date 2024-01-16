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
        Schema::create('dg_goals', function(Blueprint $table){
            $table->id('dg_ID');
            $table->string('dg_name');
            $table->unsignedBigInteger('dg_prio');
            $table->string('dg_beschreibung');
            $table->string('dg_bild_URL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dg_goals');
    }
};

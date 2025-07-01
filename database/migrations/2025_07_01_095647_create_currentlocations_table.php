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
        Schema::create('currentlocations', function (Blueprint $table) {
            $table->id();
            $table->string('Latitude');
            $table->string('Longitude');
            $table->integer('RiderId');
            $table->foreign('RiderId')->references('id')->on('riders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currentlocations');
    }
};

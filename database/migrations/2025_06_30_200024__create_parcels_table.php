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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('ParcelName');
            $table->string('ParcelCode')->unique();
            $table->string('SentByName');
            $table->string('SentByLocation');
            $table->string('SentToName');
            $table->string('SentToLocation');
            $table->string('SentToContact');
            $table->string('ParcelWeight');
            $table->string('ParcelImage')->default('Null');
            $table->string('ParcelUnit')->default('KG');

            $table->integer('RiderId');
            $table->foreign('RiderId')->references('id')->on('riders');

            
            $table->string('ParcelStatus')->default('Waiting for approval');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};

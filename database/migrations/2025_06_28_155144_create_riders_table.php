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
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->string('RiderName');
            $table->string('RiderEmail');
            $table->bigInteger('RiderPhone');
            $table->string('RiderPassword');
            $table->bigInteger('RiderCnic');
            $table->string('RiderAddress');
            $table->string('RiderStatus')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riders');
    }
};

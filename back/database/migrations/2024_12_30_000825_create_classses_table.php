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
        Schema::create('classses', function (Blueprint $table) {
            $table->id();
            $table->string('className');
            $table->string('tethName');
            $table->string('time');
            $table->string('target');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('numberClass');
            $table->string('discretion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classses');
    }
};

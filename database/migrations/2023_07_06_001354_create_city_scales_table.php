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
        Schema::create('city_scales', function (Blueprint $table) {
            $table->id();           
            $table->string('region');
            $table->string('level');
            $table->double('low',8,3);
            $table->double('medium',8,3);
            $table->double('high',8,3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city_scales');
    }
};

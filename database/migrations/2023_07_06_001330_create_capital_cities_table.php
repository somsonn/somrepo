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
        Schema::create('capital_cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->boolean('desertalw');
            $table->double('low',8,3);
            $table->double('medium',8,3);
            $table->double('high',8,3);
            $table->boolean('status')->default(false);  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capital_cities');
    }
};

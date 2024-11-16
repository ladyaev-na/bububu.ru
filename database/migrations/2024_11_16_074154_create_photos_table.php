<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->foreignId('product_id')->constrained('products','id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
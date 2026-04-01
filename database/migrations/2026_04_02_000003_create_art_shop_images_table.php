<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('art_shop_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('art_shop_id')->constrained('art_shops')->cascadeOnDelete();
            $table->string('image');
            $table->integer('sort_order')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('art_shop_images');
    }
};

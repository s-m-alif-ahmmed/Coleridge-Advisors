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
        Schema::create('place_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('main_place_slider_id')->nullable();
            $table->string('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('image')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_sliders');
    }
};

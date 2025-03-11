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
        Schema::create('post_ads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('whatsapp');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->string('locality');
            $table->string('category');
            $table->string('details');
            $table->string('description');
            $table->integer('age');
            $table->json('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_ads');
    }
};


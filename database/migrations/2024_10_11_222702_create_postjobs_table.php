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
        Schema::create('postjobs', function (Blueprint $table) {
            $table->id();

            $table->string('category');
            $table->string('title');
            $table->string('company');
            $table->string('web_address');
            $table->string('location');
            $table->string('price_range');
            $table->longText('description');
            $table->string('file');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postjobs');
    }
};

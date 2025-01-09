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

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->string('title');
            $table->string('company');
            $table->string('web_address')->nullable();
            $table->string('location');
            $table->string('price_range');
            $table->longText('requirement');
            $table->longText('benefit')->nullable();
            $table->longText('description');
            $table->string('file')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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

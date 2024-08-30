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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->string('cover_image')->nullable();
            $table->string('qr_code_hash')->unique()->nullable();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('book_series_id')->nullable();
            $table->string('ibsn')->unique()->nullable();
            $table->timestamps();
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('book_series_id')->references('id')->on('book_series');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

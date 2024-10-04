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
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['book_series_id']);
            $table->dropColumn('book_series_id');
            $table->string('genre')->change()->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->string('genre')->change()->after('title');
            $table->unsignedBigInteger('book_series_id')->nullable()->after('author_id');
            $table->foreign('book_series_id')->references('id')->on('book_series');
        });
    }
};

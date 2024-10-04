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
        Schema::table('book_series', function (Blueprint $table) {
            $table->unsignedBigInteger('book_id')->nullable()->after('id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->unsignedBigInteger('series_id')->nullable()->after('book_id');
            $table->foreign('series_id')->references('id')->on('series');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book_series', function (Blueprint $table) {
            $table->dropForeign(['book_id', 'series_id']);
            $table->dropColumn('book_id')->nullable();
            $table->dropColumn('series_id')->nullable();
        });
    }
};

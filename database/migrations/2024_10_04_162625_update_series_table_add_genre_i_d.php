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
        Schema::table('series', function (Blueprint $table) {
            $table->dropColumn('genre');
            $table->unsignedBigInteger('genre_id')->nullable()->after('title');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('series', function (Blueprint $table) {
            $table->string('genre')->nullable()->after('title');
            $table->dropForeign(['genre_id']);
            $table->dropColumn('genre_id');
        });
    }
};

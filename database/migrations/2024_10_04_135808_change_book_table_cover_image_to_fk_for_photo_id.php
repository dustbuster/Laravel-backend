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
            $table->dropColumn('cover_image')->nullable();
            $table->unsignedBigInteger('cover_image_photo_id')->nullable()->after('qr_code_hash');
            $table->foreign('cover_image_photo_id')->references('id')->on('photos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['cover_image_photo_id']);
            $table->dropColumn('cover_image_photo_id')->nullable();
            $table->string('cover_image')->nullable();
        });
    }
};

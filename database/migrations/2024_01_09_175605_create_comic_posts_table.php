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
        Schema::create('comic_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comic_series_id')->nullable()->constrained('comic_series')->onDelete('cascade');
            $table->integer('page_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comic_posts');
    }
};

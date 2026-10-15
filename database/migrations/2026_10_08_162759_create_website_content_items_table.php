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
    {Schema::create('website_content_items', function (Blueprint $table) {
    $table->id();

    $table->string('page');
    $table->string('content_key')->unique();
    $table->string('type')->default('text');

    $table->text('value')->nullable();
    $table->text('original_value')->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_content_items');
    }
};

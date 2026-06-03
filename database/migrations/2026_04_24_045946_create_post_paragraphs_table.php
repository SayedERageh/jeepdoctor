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
    Schema::create('post_paragraphs', function (Blueprint $table) {
    $table->id();

    $table->foreignId('post_id')
        ->constrained()
        ->onDelete('cascade');

    $table->text('content')->nullable(); // نص الفقرة

    $table->string('image')->nullable(); // صورة داخل الفقرة

    $table->integer('order')->default(0); // ترتيب

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_paragraphs');
    }
};

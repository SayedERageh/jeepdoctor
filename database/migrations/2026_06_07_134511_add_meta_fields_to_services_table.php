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
    Schema::table('services', function (Blueprint $table) {
        $table->json('meta_keywords')->nullable()->after('is_active');
        $table->text('meta_description')->nullable()->after('meta_keywords');
        $table->json('meta_keywords')->nullable()->default(null);
    });
}

public function down(): void
{
    Schema::table('services', function (Blueprint $table) {
        $table->dropColumn(['meta_keywords', 'meta_description']);
    });
}
};

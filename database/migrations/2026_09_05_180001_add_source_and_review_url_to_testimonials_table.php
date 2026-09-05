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
        Schema::table('testimonials', function (Blueprint $table) {
            if (!Schema::hasColumn('testimonials', 'source')) {
                $table->string('source')->default('local')->after('is_active');
            }
            if (!Schema::hasColumn('testimonials', 'review_url')) {
                $table->string('review_url')->nullable()->after('source');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testimonials', function (Blueprint $table) {
            if (Schema::hasColumn('testimonials', 'review_url')) {
                $table->dropColumn('review_url');
            }
            if (Schema::hasColumn('testimonials', 'source')) {
                $table->dropColumn('source');
            }
        });
    }
};

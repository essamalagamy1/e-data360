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
            if (!Schema::hasColumn('services', 'color_from')) $table->string('color_from')->default('blue-500')->after('icon');
            if (!Schema::hasColumn('services', 'color_to')) $table->string('color_to')->default('cyan-500');
            if (!Schema::hasColumn('services', 'badge_icon')) $table->string('badge_icon')->nullable();
            if (!Schema::hasColumn('services', 'badge_color')) $table->string('badge_color')->default('yellow-400');
            if (!Schema::hasColumn('services', 'price_starting')) $table->string('price_starting')->nullable();
            if (!Schema::hasColumn('services', 'price_label')) $table->string('price_label')->default('يبدأ من');
            if (!Schema::hasColumn('services', 'duration')) $table->string('duration')->nullable();
            if (!Schema::hasColumn('services', 'cta_text')) $table->string('cta_text')->default('اطلب الآن');
            if (!Schema::hasColumn('services', 'cta_link')) $table->string('cta_link')->nullable();
            if (!Schema::hasColumn('services', 'is_featured')) $table->boolean('is_featured')->default(false);
            if (!Schema::hasColumn('services', 'order')) $table->integer('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'color_from', 'color_to', 'badge_icon', 'badge_color',
                'price_starting', 'price_label', 'duration', 'cta_text', 'cta_link',
                'is_featured', 'order'
            ]);
        });
    }
};

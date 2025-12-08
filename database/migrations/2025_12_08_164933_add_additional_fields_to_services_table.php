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
            // icon already exists, so we skip it
            $table->string('color_from')->default('blue-500')->after('icon');
            $table->string('color_to')->default('cyan-500')->after('color_from');
            $table->string('badge_icon')->nullable()->after('color_to');
            $table->string('badge_color')->default('yellow-400')->after('badge_icon');
            $table->string('price_starting')->nullable()->after('badge_color');
            $table->string('price_label')->default('يبدأ من')->after('price_starting');
            $table->string('duration')->nullable()->after('price_label');
            $table->string('cta_text')->default('اطلب الآن')->after('duration');
            $table->string('cta_link')->nullable()->after('cta_text');
            $table->boolean('is_featured')->default(false)->after('cta_link');
            $table->integer('order')->default(0)->after('is_featured');
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

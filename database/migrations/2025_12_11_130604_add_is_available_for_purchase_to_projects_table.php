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
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'is_available_for_purchase')) {
                $table->boolean('is_available_for_purchase')->default(false)->after('status');
            }
            if (!Schema::hasColumn('projects', 'price')) {
                $table->decimal('price', 10, 2)->nullable()->after('is_available_for_purchase');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['is_available_for_purchase', 'price']);
        });
    }
};

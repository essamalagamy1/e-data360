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
        Schema::table('analytics_settings', function (Blueprint $table) {
            $table->string('ga_property_id')->nullable()->after('ga_measurement_id')->comment('Numeric Property ID for Data API');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('analytics_settings', function (Blueprint $table) {
            $table->dropColumn('ga_property_id');
        });
    }
};


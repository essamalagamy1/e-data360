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
        Schema::table('company_settings', function (Blueprint $table) {
            if (!Schema::hasColumn('company_settings', 'business_type')) {
                $table->string('business_type')->default('ProfessionalService')->after('company_name');
            }
            if (!Schema::hasColumn('company_settings', 'city_primary')) {
                $table->string('city_primary')->default('الرياض')->after('location_text');
            }
            if (!Schema::hasColumn('company_settings', 'country_primary')) {
                $table->string('country_primary')->default('SA')->after('city_primary');
            }
            if (!Schema::hasColumn('company_settings', 'latitude_primary')) {
                $table->decimal('latitude_primary', 10, 7)->default(24.7136000)->after('country_primary');
            }
            if (!Schema::hasColumn('company_settings', 'longitude_primary')) {
                $table->decimal('longitude_primary', 10, 7)->default(46.6753000)->after('latitude_primary');
            }
            if (!Schema::hasColumn('company_settings', 'location_secondary')) {
                $table->string('location_secondary')->nullable()->after('longitude_primary');
            }
            if (!Schema::hasColumn('company_settings', 'city_secondary')) {
                $table->string('city_secondary')->default('جدة')->after('location_secondary');
            }
            if (!Schema::hasColumn('company_settings', 'country_secondary')) {
                $table->string('country_secondary')->default('SA')->after('city_secondary');
            }
            if (!Schema::hasColumn('company_settings', 'latitude_secondary')) {
                $table->decimal('latitude_secondary', 10, 7)->default(21.4858000)->after('country_secondary');
            }
            if (!Schema::hasColumn('company_settings', 'longitude_secondary')) {
                $table->decimal('longitude_secondary', 10, 7)->default(39.1925000)->after('latitude_secondary');
            }
            if (!Schema::hasColumn('company_settings', 'google_review_url')) {
                $table->string('google_review_url')->nullable()->after('longitude_secondary');
            }
            if (!Schema::hasColumn('company_settings', 'google_place_id')) {
                $table->string('google_place_id')->nullable()->after('google_review_url');
            }
            if (!Schema::hasColumn('company_settings', 'google_places_api_key')) {
                $table->string('google_places_api_key')->nullable()->after('google_place_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_settings', function (Blueprint $table) {
            $columns = [
                'business_type',
                'city_primary',
                'country_primary',
                'latitude_primary',
                'longitude_primary',
                'location_secondary',
                'city_secondary',
                'country_secondary',
                'latitude_secondary',
                'longitude_secondary',
                'google_review_url',
                'google_place_id',
                'google_places_api_key',
            ];
            foreach ($columns as $column) {
                if (Schema::hasColumn('company_settings', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};

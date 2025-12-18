<?php

namespace App\Jobs;

use App\Services\AnalyticsService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Spatie\Analytics\Period;

class FetchAnalyticsData implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(AnalyticsService $service): void
    {
        try {
            Log::info('FetchAnalyticsData: Starting analytics data fetch');

            // Define period (last 7 days)
            $period = Period::days(7);

            // Fetch all analytics data to populate cache
            $service->getOverviewStats($period);
            $service->getVisitorsByDate($period);
            $service->getTrafficSources($period);
            $service->getDeviceCategories($period);
            $service->getBrowsers($period);
            $service->getCountries($period);
            $service->getCities($period);
            $service->getEvents($period);
            $service->getTopProjects($period);
            $service->getMostVisitedPages($period);
            $service->getTopReferrers($period);

            Log::info('FetchAnalyticsData: Successfully fetched all analytics data');
        } catch (\Exception $e) {
            Log::error('FetchAnalyticsData: Error fetching analytics data', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
        }
    }
}

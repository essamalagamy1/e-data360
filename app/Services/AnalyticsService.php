<?php

namespace App\Services;

use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Project;

class AnalyticsService
{
    protected int $cacheMinutes = 5; // تحديث كل 5 دقائق بدلاً من 30

    /**
     * Get overview statistics
     */
    public function getOverviewStats(Period $period): array
    {
        return Cache::remember("analytics.overview.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}", $this->cacheMinutes * 60, function () use ($period) {
            try {
                Log::info('Fetching analytics overview stats', [
                    'start_date' => $period->startDate->format('Y-m-d'),
                    'end_date' => $period->endDate->format('Y-m-d'),
                    'property_id' => config('analytics.property_id'),
                ]);
                
                // Use the simple methods that work with GA4
                $visitorsData = Analytics::fetchTotalVisitorsAndPageViews($period);
                
                Log::info('Analytics data received', [
                    'count' => $visitorsData->count(),
                    'data' => $visitorsData->toArray(),
                ]);
                
                $totalVisitors = $visitorsData->sum('visitors');
                $totalPageViews = $visitorsData->sum('pageViews');
                
                // Calculate average pages per session
                $avgPagesPerSession = $totalVisitors > 0 ? round($totalPageViews / $totalVisitors, 2) : 0;

                Log::info('Analytics stats calculated', [
                    'total_visitors' => $totalVisitors,
                    'total_page_views' => $totalPageViews,
                    'avg_pages_per_session' => $avgPagesPerSession,
                ]);

                return [
                    'total_users' => $totalVisitors,
                    'total_page_views' => $totalPageViews,
                    'total_sessions' => $totalVisitors, // GA4 uses activeUsers instead of sessions
                    'bounce_rate' => 0, // Not easily available in GA4
                    'avg_session_duration' => 0, // Not easily available in GA4
                    'pages_per_session' => $avgPagesPerSession,
                ];
            } catch (\Exception $e) {
                Log::error('Analytics getOverviewStats error', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                ]);
                return $this->getEmptyOverviewStats();
            }
        });
    }

    /**
     * Get visitors and page views by date
     */
    public function getVisitorsByDate(Period $period): array
    {
        return Cache::remember("analytics.visitors_by_date.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}", $this->cacheMinutes * 60, function () use ($period) {
            try {
                return Analytics::fetchVisitorsAndPageViewsByDate($period)->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get most visited pages
     */
    public function getMostVisitedPages(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.most_visited_pages.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                return Analytics::fetchMostVisitedPages($period, $maxResults)->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get top referrers
     */
    public function getTopReferrers(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.top_referrers.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                return Analytics::fetchTopReferrers($period, $maxResults)->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get traffic sources
     */
    public function getTrafficSources(Period $period): array
    {
        return Cache::remember("analytics.traffic_sources.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}", $this->cacheMinutes * 60, function () use ($period) {
            try {
                $result = Analytics::get(
                    $period,
                    ['activeUsers'],
                    ['sessionDefaultChannelGroup']
                );

                return $result->map(function ($item) {
                    return [
                        'source' => $item['sessionDefaultChannelGroup'] ?? 'Unknown',
                        'users' => $item['activeUsers'] ?? 0,
                    ];
                })->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get device categories
     */
    public function getDeviceCategories(Period $period): array
    {
        return Cache::remember("analytics.device_categories.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}", $this->cacheMinutes * 60, function () use ($period) {
            try {
                $result = Analytics::get(
                    $period,
                    ['activeUsers'],
                    ['deviceCategory']
                );

                return $result->map(function ($item) {
                    return [
                        'device' => $item['deviceCategory'] ?? 'Unknown',
                        'users' => $item['activeUsers'] ?? 0,
                    ];
                })->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get browsers
     */
    public function getBrowsers(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.browsers.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                $result = Analytics::get(
                    $period,
                    ['activeUsers'],
                    ['browser']
                );

                return $result->sortByDesc('activeUsers')
                    ->take($maxResults)
                    ->map(function ($item) {
                        return [
                            'browser' => $item['browser'] ?? 'Unknown',
                            'users' => $item['activeUsers'] ?? 0,
                        ];
                    })->values()->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get countries
     */
    public function getCountries(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.countries.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                $result = Analytics::get(
                    $period,
                    ['activeUsers'],
                    ['country']
                );

                return $result->sortByDesc('activeUsers')
                    ->take($maxResults)
                    ->map(function ($item) {
                        return [
                            'country' => $item['country'] ?? 'Unknown',
                            'users' => $item['activeUsers'] ?? 0,
                        ];
                    })->values()->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get cities
     */
    public function getCities(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.cities.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                $result = Analytics::get(
                    $period,
                    ['activeUsers'],
                    ['city']
                );

                return $result->sortByDesc('activeUsers')
                    ->take($maxResults)
                    ->map(function ($item) {
                        return [
                            'city' => $item['city'] ?? 'Unknown',
                            'users' => $item['activeUsers'] ?? 0,
                        ];
                    })->values()->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get events
     */
    public function getEvents(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.events.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                $result = Analytics::get(
                    $period,
                    ['eventCount'],
                    ['eventName']
                );

                return $result->sortByDesc('eventCount')
                    ->take($maxResults)
                    ->map(function ($item) {
                        return [
                            'event_name' => $item['eventName'] ?? 'Unknown',
                            'count' => $item['eventCount'] ?? 0,
                        ];
                    })->values()->toArray();
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get top viewed projects
     */
    public function getTopProjects(Period $period, int $maxResults = 10): array
    {
        return Cache::remember("analytics.top_projects.{$period->startDate->format('Y-m-d')}.{$period->endDate->format('Y-m-d')}.{$maxResults}", $this->cacheMinutes * 60, function () use ($period, $maxResults) {
            try {
                // Get all pages
                $pages = Analytics::fetchMostVisitedPages($period, 100);
                
                // Filter only project pages (URLs that start with /projects/)
                $projectPages = $pages->filter(function ($page) {
                    $path = $page['pagePath'] ?? '';
                    return str_starts_with($path, '/projects/');
                });

                // Extract project slugs and get project details
                $projectData = [];
                foreach ($projectPages as $page) {
                    $path = $page['pagePath'] ?? '';
                    // Extract slug from path like /projects/project-slug
                    $slug = str_replace('/projects/', '', $path);
                    $slug = trim($slug, '/');
                    
                    if (!empty($slug)) {
                        // Try to find the project
                        $project = Project::where('slug', $slug)->first();
                        
                        if ($project) {
                            $projectData[] = [
                                'project_id' => $project->id,
                                'project_name' => $project->title,
                                'project_slug' => $project->slug,
                                'views' => $page['screenPageViews'] ?? 0,
                                'visitors' => $page['activeUsers'] ?? 0,
                            ];
                        }
                    }
                }

                // Sort by views and take top results
                usort($projectData, function ($a, $b) {
                    return $b['views'] - $a['views'];
                });

                return array_slice($projectData, 0, $maxResults);
            } catch (\Exception $e) {
                return [];
            }
        });
    }

    /**
     * Get empty overview stats (fallback)
     */
    protected function getEmptyOverviewStats(): array
    {
        return [
            'total_users' => 0,
            'total_page_views' => 0,
            'total_sessions' => 0,
            'bounce_rate' => 0,
            'avg_session_duration' => 0,
            'pages_per_session' => 0,
        ];
    }

    /**
     * Clear all analytics cache
     */
    public function clearCache(): void
    {
        Cache::flush();
    }
}

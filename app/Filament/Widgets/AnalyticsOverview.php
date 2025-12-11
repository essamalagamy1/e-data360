<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class AnalyticsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected function getStats(): array
    {
        try {
            // Check if Analytics is configured
            if (!config('analytics.property_id')) {
                return [
                    Stat::make('تنبيه', 'يرجى إضافة ANALYTICS_PROPERTY_ID في ملف .env')
                        ->description('لعرض إحصائيات Google Analytics')
                        ->descriptionIcon('heroicon-o-exclamation-triangle')
                        ->color('warning'),
                ];
            }

            // Fetch data for last 7 days
            $period = Period::days(7);
            $visitorsData = Analytics::fetchTotalVisitorsAndPageViews($period);
            
            // Calculate totals
            $totalVisitors = $visitorsData->sum('visitors');
            $totalPageViews = $visitorsData->sum('pageViews');
            
            // Fetch most visited pages
            $mostVisited = Analytics::fetchMostVisitedPages($period, 1);
            $topPage = $mostVisited->first()['pageTitle'] ?? 'لا توجد بيانات';
            
            // Fetch top referrers
            $topReferrers = Analytics::fetchTopReferrers($period, 1);
            $topReferrer = $topReferrers->first()['pageReferrer'] ?? 'مباشر';

            return [
                Stat::make('إجمالي الزوار', number_format($totalVisitors))
                    ->description('آخر 7 أيام')
                    ->descriptionIcon('heroicon-o-users')
                    ->chart([7, 12, 15, 18, 22, 25, $totalVisitors])
                    ->color('success'),
                
                Stat::make('مشاهدات الصفحات', number_format($totalPageViews))
                    ->description('آخر 7 أيام')
                    ->descriptionIcon('heroicon-o-eye')
                    ->chart([20, 35, 45, 55, 70, 85, $totalPageViews])
                    ->color('info'),
                
                Stat::make('الصفحة الأكثر زيارة', $topPage)
                    ->description('آخر 7 أيام')
                    ->descriptionIcon('heroicon-o-star')
                    ->color('warning'),
                
                Stat::make('المصدر الرئيسي', $topReferrer)
                    ->description('آخر 7 أيام')
                    ->descriptionIcon('heroicon-o-link')
                    ->color('primary'),
            ];
            
        } catch (\Exception $e) {
            return [
                Stat::make('خطأ', 'تعذر جلب البيانات')
                    ->description($e->getMessage())
                    ->descriptionIcon('heroicon-o-exclamation-circle')
                    ->color('danger'),
            ];
        }
    }
}

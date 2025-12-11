<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;

class VisitorsChart extends ChartWidget
{
    protected ?string $heading = 'الزوار خلال آخر 7 أيام';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        try {
            if (!config('analytics.property_id')) {
                return [
                    'datasets' => [
                        [
                            'label' => 'لا توجد بيانات',
                            'data' => [0],
                        ],
                    ],
                    'labels' => ['يرجى إضافة معرف الخاصية الرقمي (Property ID)'],
                ];
            }

            $period = Period::days(7);
            $visitorsData = Analytics::fetchVisitorsAndPageViewsByDate($period);
            
            $labels = [];
            $visitors = [];
            $pageViews = [];
            
            foreach ($visitorsData as $data) {
                $labels[] = date('d/m', strtotime($data['date']));
                $visitors[] = $data['activeUsers'] ?? 0;
                $pageViews[] = $data['screenPageViews'] ?? 0;
            }

            return [
                'datasets' => [
                    [
                        'label' => 'الزوار',
                        'data' => $visitors,
                        'borderColor' => 'rgb(59, 130, 246)',
                        'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    ],
                    [
                        'label' => 'مشاهدات الصفحات',
                        'data' => $pageViews,
                        'borderColor' => 'rgb(6, 182, 212)',
                        'backgroundColor' => 'rgba(6, 182, 212, 0.1)',
                    ],
                ],
                'labels' => $labels,
            ];
            
        } catch (\Exception $e) {
            return [
                'datasets' => [
                    [
                        'label' => 'خطأ: ' . $e->getMessage(),
                        'data' => [0],
                    ],
                ],
                'labels' => ['تحقق من إعدادات Google Analytics'],
            ];
        }
    }

    protected function getType(): string
    {
        return 'line';
    }
}

<?php

namespace App\Filament\Widgets\Analytics;

use App\Services\AnalyticsService;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Spatie\Analytics\Period;

class TopPagesTable extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int | string | array $columnSpan = 'full';
    
    public ?string $filter = '7days';

    public function table(Table $table): Table
    {
        try {
            if (!config('analytics.property_id')) {
                return $this->getEmptyTable($table);
            }

            $period = $this->getPeriod();
            $service = new AnalyticsService();
            $pages = $service->getMostVisitedPages($period, 10);

            $records = collect($pages)->map(function ($page, $index) {
                return [
                    'rank' => $index + 1,
                    'title' => $page['pageTitle'] ?? 'بدون عنوان',
                    'path' => $page['fullPageUrl'] ?? $page['pagePath'] ?? '/',
                    'views' => $page['screenPageViews'] ?? 0,
                ];
            });

            return $table
                ->heading('الصفحات الأكثر زيارة')
                ->query(fn () => $records)
                ->columns([
                    Tables\Columns\TextColumn::make('rank')
                        ->label('#')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('title')
                        ->label('عنوان الصفحة')
                        ->searchable()
                        ->limit(50),
                    Tables\Columns\TextColumn::make('path')
                        ->label('المسار')
                        ->searchable()
                        ->limit(40)
                        ->copyable(),
                    Tables\Columns\TextColumn::make('views')
                        ->label('المشاهدات')
                        ->numeric()
                        ->sortable(),
                ])
                ->defaultSort('views', 'desc');
                
        } catch (\Exception $e) {
            return $this->getErrorTable($table, $e->getMessage());
        }
    }

    protected function getPeriod(): Period
    {
        return match($this->filter) {
            '7days' => Period::days(7),
            '30days' => Period::days(30),
            '90days' => Period::days(90),
            default => Period::days(7),
        };
    }

    protected function getEmptyTable(Table $table): Table
    {
        return $table
            ->heading('الصفحات الأكثر زيارة')
            ->emptyStateHeading('لا توجد بيانات')
            ->emptyStateDescription('يرجى إضافة معرف الخاصية الرقمي (Property ID)')
            ->emptyStateIcon('heroicon-o-exclamation-triangle');
    }

    protected function getErrorTable(Table $table, string $message): Table
    {
        return $table
            ->heading('الصفحات الأكثر زيارة')
            ->emptyStateHeading('خطأ في جلب البيانات')
            ->emptyStateDescription($message)
            ->emptyStateIcon('heroicon-o-exclamation-circle');
    }
}

<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AnalyticsPage extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chart-bar';

    protected string $view = 'filament.pages.analytics-page';
    
    protected static ?string $navigationLabel = 'تحليلات الموقع';
    
    protected static ?string $title = 'تحليلات Google Analytics';
    
    
    protected static string|\UnitEnum|null $navigationGroup = 'الإعدادات';
    protected static ?int $navigationSort = 3;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('checkConnection')
                ->label('فحص الاتصال')
                ->icon('heroicon-o-signal')
                ->color('success')
                ->action(function () {
                    try {
                        // Test connection
                        $period = \Spatie\Analytics\Period::days(1);
                        $result = \Spatie\Analytics\Facades\Analytics::fetchTotalVisitorsAndPageViews($period);
                        
                        \Filament\Notifications\Notification::make()
                            ->title('✅ الاتصال ناجح!')
                            ->body('الربط مع Google Analytics يعمل بشكل صحيح')
                            ->success()
                            ->duration(5000)
                            ->send();
                    } catch (\Exception $e) {
                        \Filament\Notifications\Notification::make()
                            ->title('❌ فشل الاتصال')
                            ->body('خطأ: ' . $e->getMessage())
                            ->danger()
                            ->duration(10000)
                            ->send();
                    }
                }),
            \Filament\Actions\Action::make('refresh')
                ->label('تحديث البيانات')
                ->icon('heroicon-o-arrow-path')
                ->color('primary')
                ->action(function () {
                    // Clear analytics cache
                    \Illuminate\Support\Facades\Cache::flush();
                    
                    // Show success notification
                    \Filament\Notifications\Notification::make()
                        ->title('تم تحديث البيانات')
                        ->success()
                        ->send();
                        
                    // Reload the page
                    redirect(request()->header('Referer'));
                }),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\Analytics\OverviewStats::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            // Row 1: Charts
            \App\Filament\Widgets\Analytics\VisitorsTimeChart::class,
            \App\Filament\Widgets\Analytics\TrafficSourcesChart::class,
            \App\Filament\Widgets\Analytics\DevicesChart::class,
            
            // Row 2: Special Charts
            \App\Filament\Widgets\Analytics\TopProjectsChart::class,
            
            // Row 3: Tables
            \App\Filament\Widgets\Analytics\TopPagesTable::class,
            \App\Filament\Widgets\Analytics\BrowsersTable::class,
            \App\Filament\Widgets\Analytics\LocationsTable::class,
            \App\Filament\Widgets\Analytics\EventsTable::class,
        ];
    }

    public function getHeaderWidgetsColumns(): int | array
    {
        return 1;
    }

    public function getFooterWidgetsColumns(): int | array
    {
        return [
            'sm' => 1,
            'md' => 2,
            'xl' => 3,
        ];
    }
}

<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AnalyticsPage extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-chart-bar';

    protected string $view = 'filament.pages.analytics-page';
    
    protected static ?string $navigationLabel = 'تحليلات الموقع';
    
    protected static ?string $title = 'تحليلات Google Analytics';
    
    protected static string | \UnitEnum | null $navigationGroup = 'التقارير';
    
    protected static ?int $navigationSort = 1;

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

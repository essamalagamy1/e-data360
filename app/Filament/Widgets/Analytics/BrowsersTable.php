<?php

namespace App\Filament\Widgets\Analytics;

use App\Services\AnalyticsService;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Spatie\Analytics\Period;

class BrowsersTable extends BaseWidget
{
    protected static ?int $sort = 6;
    
    public ?string $filter = '7days';

    public function table(Table $table): Table
    {
        try {
            if (!config('analytics.property_id')) {
                return $this->getEmptyTable($table);
            }

            $period = $this->getPeriod();
            $service = new AnalyticsService();
            $browsers = $service->getBrowsers($period, 10);

            $totalUsers = array_sum(array_column($browsers, 'users'));
            
            $records = collect($browsers)->map(function ($browser, $index) use ($totalUsers) {
                $percentage = $totalUsers > 0 ? ($browser['users'] / $totalUsers) * 100 : 0;
                return [
                    'rank' => $index + 1,
                    'browser' => $browser['browser'],
                    'users' => $browser['users'],
                    'percentage' => round($percentage, 2),
                ];
            });

            return $table
                ->heading('المتصفحات المستخدمة')
                ->query(fn () => $records)
                ->columns([
                    Tables\Columns\TextColumn::make('rank')
                        ->label('#'),
                    Tables\Columns\TextColumn::make('browser')
                        ->label('المتصفح')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('users')
                        ->label('الزوار')
                        ->numeric(),
                    Tables\Columns\TextColumn::make('percentage')
                        ->label('النسبة')
                        ->suffix('%')
                        ->color(fn ($state) => $state > 30 ? 'success' : ($state > 10 ? 'warning' : 'gray')),
                ]);
                
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
            ->heading('المتصفحات المستخدمة')
            ->emptyStateHeading('لا توجد بيانات')
            ->emptyStateDescription('يرجى إضافة معرف الخاصية الرقمي (Property ID)')
            ->emptyStateIcon('heroicon-o-exclamation-triangle');
    }

    protected function getErrorTable(Table $table, string $message): Table
    {
        return $table
            ->heading('المتصفحات المستخدمة')
            ->emptyStateHeading('خطأ في جلب البيانات')
            ->emptyStateDescription($message)
            ->emptyStateIcon('heroicon-o-exclamation-circle');
    }
}

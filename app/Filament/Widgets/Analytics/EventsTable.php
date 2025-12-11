<?php

namespace App\Filament\Widgets\Analytics;

use App\Services\AnalyticsService;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Spatie\Analytics\Period;

class EventsTable extends BaseWidget
{
    protected static ?int $sort = 8;
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
            $events = $service->getEvents($period, 15);

            $records = collect($events)->map(function ($event, $index) {
                return [
                    'rank' => $index + 1,
                    'event_name' => $this->translateEventName($event['event_name']),
                    'count' => $event['count'],
                ];
            });

            return $table
                ->heading('الأحداث (Events)')
                ->query(fn () => $records)
                ->columns([
                    Tables\Columns\TextColumn::make('rank')
                        ->label('#')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('event_name')
                        ->label('اسم الحدث')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('count')
                        ->label('عدد المرات')
                        ->numeric()
                        ->sortable(),
                ])
                ->defaultSort('count', 'desc');
                
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

    protected function translateEventName(string $eventName): string
    {
        return match($eventName) {
            'page_view' => 'مشاهدة صفحة',
            'click' => 'نقرة',
            'scroll' => 'تمرير',
            'session_start' => 'بداية جلسة',
            'first_visit' => 'زيارة أولى',
            'user_engagement' => 'تفاعل المستخدم',
            'form_submit' => 'إرسال نموذج',
            default => $eventName,
        };
    }

    protected function getEmptyTable(Table $table): Table
    {
        return $table
            ->heading('الأحداث (Events)')
            ->emptyStateHeading('لا توجد بيانات')
            ->emptyStateDescription('يرجى إضافة معرف الخاصية الرقمي (Property ID)')
            ->emptyStateIcon('heroicon-o-exclamation-triangle');
    }

    protected function getErrorTable(Table $table, string $message): Table
    {
        return $table
            ->heading('الأحداث (Events)')
            ->emptyStateHeading('خطأ في جلب البيانات')
            ->emptyStateDescription($message)
            ->emptyStateIcon('heroicon-o-exclamation-circle');
    }
}

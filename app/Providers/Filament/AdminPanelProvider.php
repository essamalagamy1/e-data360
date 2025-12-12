<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                \App\Filament\Pages\Dashboard::class,
            ])
            ->widgets([
                // Dashboard widgets
                \App\Filament\Widgets\StatsOverviewWidget::class,
                \App\Filament\Widgets\LatestEntriesWidget::class,
                \App\Filament\Widgets\ContentStatsChart::class,
                \App\Filament\Widgets\MonthlySubmissionsChart::class,
                
                // Analytics widgets (registered for Livewire but won't show on Dashboard)
                \App\Filament\Widgets\Analytics\OverviewStats::class,
                \App\Filament\Widgets\Analytics\VisitorsTimeChart::class,
                \App\Filament\Widgets\Analytics\TopPagesTable::class,
                \App\Filament\Widgets\Analytics\TrafficSourcesChart::class,
                \App\Filament\Widgets\Analytics\DevicesChart::class,
                \App\Filament\Widgets\Analytics\BrowsersTable::class,
                \App\Filament\Widgets\Analytics\LocationsTable::class,
                \App\Filament\Widgets\Analytics\EventsTable::class,
                \App\Filament\Widgets\Analytics\TopProjectsChart::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}

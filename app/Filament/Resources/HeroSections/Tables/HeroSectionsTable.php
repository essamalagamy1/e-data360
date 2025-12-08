<?php

namespace App\Filament\Resources\HeroSections\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page')
                    ->searchable(),
                TextColumn::make('badge_icon')
                    ->searchable(),
                TextColumn::make('badge_text')
                    ->searchable(),
                TextColumn::make('title_line1')
                    ->searchable(),
                TextColumn::make('title_line2')
                    ->searchable(),
                TextColumn::make('cta_primary_text')
                    ->searchable(),
                TextColumn::make('cta_primary_link')
                    ->searchable(),
                TextColumn::make('cta_secondary_text')
                    ->searchable(),
                TextColumn::make('cta_secondary_link')
                    ->searchable(),
                ImageColumn::make('background_image'),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

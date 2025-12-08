<?php

namespace App\Filament\Resources\ServiceFeatures\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ServiceFeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('service_id')
                    ->relationship('service', 'title')
                    ->required(),
                TextInput::make('feature_text')
                    ->required(),
                TextInput::make('icon'),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}

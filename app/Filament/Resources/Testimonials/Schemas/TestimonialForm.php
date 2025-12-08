<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('client_name')
                    ->required(),
                TextInput::make('client_position')
                    ->required(),
                TextInput::make('client_company'),
                TextInput::make('client_avatar'),
                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->default(5),
                Textarea::make('testimonial')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('badge_text'),
                TextInput::make('badge_color_from')
                    ->required()
                    ->default('blue-600'),
                TextInput::make('badge_color_to')
                    ->required()
                    ->default('cyan-500'),
                Toggle::make('is_verified')
                    ->required(),
                Toggle::make('is_featured')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SEOSettingsResource\Pages;
use App\Models\SeoSetting;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class SEOSettingsResource extends Resource
{
    protected static ?string $model = SeoSetting::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-magnifying-glass';
    protected static ?string $modelLabel = 'إعداد SEO';
    protected static ?string $pluralModelLabel = 'إعدادات SEO';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\Select::make('page')
                ->label('الصفحة')
                ->options([
                    'home' => 'الرئيسية',
                    'about' => 'من نحن',
                    'services' => 'الخدمات',
                    'portfolio' => 'المعرض',
                    'contact' => 'تواصل معنا',
                    'request_design' => 'طلب تصميم',
                ])
                ->required()
                ->unique(ignoreRecord: true),
            Forms\Components\TextInput::make('meta_title')
                ->label('عنوان Meta')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('meta_description')
                ->label('وصف Meta')
                ->required()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page')->label('الصفحة'),
                Tables\Columns\TextColumn::make('meta_title')->label('عنوان Meta'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSEOSettings::route('/'),
            'create' => Pages\CreateSEOSettings::route('/create'),
            'edit'   => Pages\EditSEOSettings::route('/{record}/edit'),
        ];
    }
}

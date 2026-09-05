<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanySettingsResource\Pages;
use App\Models\CompanySetting;
use BackedEnum;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class CompanySettingsResource extends Resource
{
    protected static ?string $model = CompanySetting::class;

    protected static BackedEnum|string|null $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $modelLabel = 'إعدادات الشركة والـ SEO';
    protected static ?string $pluralModelLabel = 'إعدادات الشركة والـ SEO';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('company_name')->label('اسم الشركة')->required()->maxLength(255),
            Forms\Components\Select::make('business_type')
                ->label('نوع النشاط في Schema.org')
                ->options([
                    'ProfessionalService' => 'خدمات احترافية واستشارية (ProfessionalService)',
                    'LocalBusiness' => 'نشاط تجاري محلي (LocalBusiness)',
                    'Corporation' => 'شركة ومؤسسة كبرى (Corporation)',
                    'Organization' => 'منظمة عامة (Organization)',
                ])
                ->default('ProfessionalService')
                ->required(),
            Forms\Components\TextInput::make('main_email')->label('البريد الرئيسي')->email()->required()->maxLength(255),
            Forms\Components\TextInput::make('secondary_email')->label('بريد بديل')->email()->maxLength(255),
            Forms\Components\TextInput::make('phone_primary')->label('الهاتف الرئيسي')->tel()->maxLength(255),
            Forms\Components\TextInput::make('phone_secondary')->label('هاتف بديل')->tel()->maxLength(255),
            Forms\Components\TextInput::make('whatsapp_number')->label('واتساب')->tel()->maxLength(255),
            Forms\Components\Textarea::make('about_short')->label('نبذة تعريفية مختصرة')->columnSpanFull(),

            // المقر الأول (الرياض)
            Forms\Components\TextInput::make('location_text')->label('عنوان المقر الرئيسي')->maxLength(255),
            Forms\Components\TextInput::make('city_primary')->label('المدينة الرئيسية (HQ)')->default('الرياض'),
            Forms\Components\TextInput::make('country_primary')->label('كود الدولة الأول')->default('SA'),
            Forms\Components\TextInput::make('latitude_primary')->label('خط العرض الأول (Latitude)')->numeric(),
            Forms\Components\TextInput::make('longitude_primary')->label('خط الطول الأول (Longitude)')->numeric(),

            // الفرع الثاني (جدة / المنطقة الإقليمية)
            Forms\Components\TextInput::make('location_secondary')->label('عنوان الفرع الثاني')->maxLength(255),
            Forms\Components\TextInput::make('city_secondary')->label('المدينة الثانية (Branch)')->default('جدة'),
            Forms\Components\TextInput::make('country_secondary')->label('كود الدولة الثاني')->default('SA'),
            Forms\Components\TextInput::make('latitude_secondary')->label('خط العرض الثاني (Latitude)')->numeric(),
            Forms\Components\TextInput::make('longitude_secondary')->label('خط الطول الثاني (Longitude)')->numeric(),

            // تقييمات ومراجعات خرائط جوجل
            Forms\Components\TextInput::make('google_review_url')->label('رابط مراجعات جوجل المباشر')->url()->columnSpanFull(),
            Forms\Components\TextInput::make('google_place_id')->label('معرف المكان (Google Place ID)'),
            Forms\Components\TextInput::make('google_places_api_key')->label('مفتاح Google Places API Key')->password(),

            // الشعارات
            Forms\Components\FileUpload::make('logo_path')->label('شعار الشركة')->image()->directory('logos'),
            Forms\Components\FileUpload::make('favicon_path')->label('الأيقونة المفضلة (Favicon)')->image()->directory('logos'),
            Forms\Components\FileUpload::make('logo_2_path')->label('شعار بديل / أبيض')->image()->directory('logos'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')->label('اسم الشركة'),
                Tables\Columns\TextColumn::make('business_type')->label('نوع النشاط'),
                Tables\Columns\TextColumn::make('city_primary')->label('المدينة الرئيسية'),
                Tables\Columns\TextColumn::make('phone_primary')->label('الهاتف'),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanySettings::route('/'),
            'edit' => Pages\EditCompanySettings::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}

<?php

namespace App\Filament\Resources\JobApplications;

use App\Filament\Resources\JobApplications\Pages\CreateJobApplication;
use App\Filament\Resources\JobApplications\Pages\EditJobApplication;
use App\Filament\Resources\JobApplications\Pages\ListJobApplications;
use App\Filament\Resources\JobApplications\Tables\JobApplicationsTable;
use App\Models\JobApplication;
use BackedEnum;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JobApplicationResource extends Resource
{
    protected static ?string $model = JobApplication::class;

    protected static ?string $modelLabel = 'طلب توظيف';

    protected static ?string $pluralModelLabel = 'طلبات التوظيف';

    protected static ?string $navigationLabel = 'طلبات التوظيف';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            \Filament\Schemas\Components\Section::make('معلومات المتقدم')
                ->schema([
                    Forms\Components\TextInput::make('name')
                        ->label('الاسم')
                        ->readOnly(),
                    Forms\Components\TextInput::make('email')
                        ->label('البريد الإلكتروني')
                        ->email()
                        ->readOnly(),
                    Forms\Components\TextInput::make('phone')
                        ->label('رقم الهاتف')
                        ->tel()
                        ->readOnly(),
                ])->columns(3),

            \Filament\Schemas\Components\Section::make('تفاصيل الخبرة')
                ->schema([
                    Forms\Components\TextInput::make('specialization')
                        ->label('التخصص')
                        ->readOnly(),
                    Forms\Components\TextInput::make('years_of_experience')
                        ->label('سنوات الخبرة')
                        ->numeric()
                        ->readOnly(),
                    Forms\Components\FileUpload::make('cv_path')
                        ->label('السيرة الذاتية')
                        ->disk('public')
                        ->directory('cvs')
                        ->downloadable()
                        ->openable()
                        ->disabled(),
                ])->columns(2),

            \Filament\Schemas\Components\Section::make('الإجراءات')
                ->schema([
                    Forms\Components\Select::make('status')
                        ->label('الحالة')
                        ->options([
                            'pending' => 'قيد المراجعة',
                            'reviewed' => 'تمت المراجعة',
                            'accepted' => 'مقبول',
                            'rejected' => 'مرفوض',
                        ])
                        ->default('pending')
                        ->required(),
                    Forms\Components\Textarea::make('notes')
                        ->label('ملاحظات')
                        ->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return JobApplicationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJobApplications::route('/'),
            'create' => CreateJobApplication::route('/create'),
            'edit' => EditJobApplication::route('/{record}/edit'),
        ];
    }
}

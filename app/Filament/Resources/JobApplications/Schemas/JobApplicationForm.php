<?php

namespace App\Filament\Resources\JobApplications\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class JobApplicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('معلومات المتقدم')
                    ->schema([
                        TextInput::make('name')
                            ->label('الاسم')
                            ->readonly(),
                        TextInput::make('email')
                            ->label('البريد الإلكتروني')
                            ->email()
                            ->readonly(),
                        TextInput::make('phone')
                            ->label('رقم الهاتف')
                            ->tel()
                            ->readonly(),
                    ])->columns(3),

                Section::make('تفاصيل الخبرة')
                    ->schema([
                        TextInput::make('specialization')
                            ->label('التخصص')
                            ->readonly(),
                        TextInput::make('years_of_experience')
                            ->label('سنوات الخبرة')
                            ->numeric()
                            ->readonly(),
                        FileUpload::make('cv_path')
                            ->label('السيرة الذاتية')
                            ->disk('public')
                            ->directory('cvs')
                            ->downloadable()
                            ->openable()
                            ->readonly(),
                    ])->columns(2),

                Section::make('الإجراءات')
                    ->schema([
                        Select::make('status')
                            ->label('الحالة')
                            ->options([
                                'pending' => 'قيد المراجعة',
                                'reviewed' => 'تمت المراجعة',
                                'accepted' => 'مقبول',
                                'rejected' => 'مرفوض',
                            ])
                            ->default('pending')
                            ->required(),
                        Textarea::make('notes')
                            ->label('ملاحظات')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}

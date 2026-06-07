<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Illuminate\Support\Str;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Tabs::make('إعدادات الخدمة')
                    ->tabs([

                        Tab::make('📄 البيانات الأساسية')
                            ->schema([

                                TextInput::make('title')
                                    ->label('عنوان الخدمة')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                        $set('meta_title', $state);
                                    }),

                                TextInput::make('slug')
                                    ->label('الرابط المختصر (Slug)')
                                    ->required()
                                    ->unique(ignoreRecord: true),

                                TextInput::make('short_description')
                                    ->label('وصف مختصر')
                                    ->maxLength(255),

                                FileUpload::make('image')
                                    ->label('صورة الخدمة')
                                    ->image()
                                    ->disk('public')
                                    ->directory('services')
                                    ->imageEditor()
                                    ->required(),
                            ])
                            ->columns(1),

                        Tab::make('📝 تفاصيل الخدمة')
                            ->schema([
                                RichEditor::make('description')
                                    ->label('تفاصيل الخدمة')
                                    ->required()
                                    ->columnSpanFull()
                                    ->extraAttributes([
                                        'style' => 'direction: rtl; min-height: 500px;',
                                    ])
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'bulletList',
                                        'orderedList',
                                        'link',
                                        'h2',
                                        'h3',
                                        'blockquote',
                                    ]),
                            ])
                            ->columns(1),

                        Tab::make('🔎 SEO')
                            ->schema([

                                TextInput::make('meta_description')
                                    ->label('Meta Description')
                                    ->maxLength(60)
                                    ->helperText('يفضل ألا يزيد عن 60 حرف'),

                              TagsInput::make('meta_keywords')
    ->label('Meta Keywords')
    ->placeholder('اكتب كلمة واضغط Enter')
    ->separator(',')
    ->helperText('أضف كلمات مفتاحية لتحسين SEO'),
                            ])
                            ->columns(1),
                    ])
                    ->persistTab()
                    ->id('service-tabs')
                    ->contained(false)
                    ->columnSpanFull(),
            ]);
    }
}
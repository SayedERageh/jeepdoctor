<?php

namespace App\Filament\Resources\Posts\Schemas;
                             use Filament\Forms\Components\RichEditor;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([

                Tabs::make('إعدادات المقال')
                    ->tabs([

                        // 📄 البيانات الأساسية
                        Tab::make('📄 البيانات الأساسية')
                            ->schema([

                                TextInput::make('title')
                                    ->label('عنوان المقال')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', Str::slug($state));
                                        $set('meta_title', $state);
                                    }),

                                TextInput::make('slug')
                                    ->label('الرابط (Slug)')
                                    ->required()
                                    ->unique(ignoreRecord: true),

                                Select::make('category_id')
                                    ->label('التصنيف')
                                    ->relationship('category', 'name')
                              
                                    ->required(),

                                FileUpload::make('image')
                                    ->label('صورة المقال')
                                    ->image()
                                    ->disk('public')
                                    ->directory('posts')
                                    ->imageEditor()
                                    ->required(),

                                Textarea::make('short_description')
                                    ->label('وصف مختصر')
                                    ->rows(3),

                                Toggle::make('is_published')
                                    ->label('نشر المقال')
                                    ->default(true),

                            ])
                            ->columns(1),

              Tab::make('📝 المحتوى')
    ->schema([

        RichEditor::make('content')
            ->label('محتوى المقال')
            ->columnSpanFull()
            ->toolbarButtons([
                'bold',
                'italic',
                'underline',
                'strike',
                'h2',
                'h3',
                'bulletList',
                'orderedList',
                'link',
                'blockquote',
            ])
            ->required(false),

    ])
    ->columns(1),

                        // 🔎 SEO
                        Tab::make('🔎 SEO')
                            ->schema([

                                TextInput::make('meta_title')
                                    ->label('Meta Title')
                                    ->maxLength(60),

                                Textarea::make('meta_description')
                                    ->label('Meta Description')
                                    ->rows(3)
                                    ->maxLength(160),

                                TextInput::make('meta_keywords')
                                    ->label('Meta Keywords')
                                    ->helperText('افصل بينهم بفاصلة'),

                            ])
                            ->columns(1),

                    ])
                    ->persistTab()
                    ->id('post-tabs')
                    ->contained(false)
                    ->columnSpanFull(),
            ]);
    }
}
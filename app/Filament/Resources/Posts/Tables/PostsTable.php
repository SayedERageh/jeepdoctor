<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                // الصورة الرئيسية
                ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public'),

                // العنوان
                TextColumn::make('title')
                    ->label('العنوان')
                    ->searchable()
                    ->sortable(),

                // الكاتجوري
                TextColumn::make('category.name')
                    ->label('التصنيف')
                    ->badge()
                    ->sortable(),

                // الـ slug
                TextColumn::make('slug')
                    ->label('الرابط')
                    ->toggleable(isToggledHiddenByDefault: true),

                // حالة النشر
                IconColumn::make('is_published')
                    ->label('منشور')
                    ->boolean(),

                // تاريخ الإنشاء
                TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime('Y-m-d')
                    ->sortable(),

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
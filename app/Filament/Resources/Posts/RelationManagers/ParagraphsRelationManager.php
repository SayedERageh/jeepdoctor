<?php

namespace App\Filament\Resources\Posts\RelationManagers;

use Filament\Actions\AssociateAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DissociateAction;
use Filament\Actions\DissociateBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ParagraphsRelationManager extends RelationManager
{
    protected static string $relationship = 'paragraphs';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
            // 📝 نص الفقرة
                Textarea::make('content')
                    ->label('نص الفقرة')
                    ->required()
                    ->rows(4),

                // 🖼 صورة الفقرة
                FileUpload::make('image')
                    ->label('صورة الفقرة')
                    ->image()
                    ->disk('public')
                    ->directory('posts/paragraphs'),

                // 🔢 ترتيب الفقرة
                TextInput::make('order')
                    ->label('الترتيب')
                    ->numeric()
                    ->default(0),

            
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('content')
            ->columns([
                
              TextColumn::make('content')
                    ->label('النص')
                    ->limit(50)
                    ->searchable(),

                ImageColumn::make('image')
                    ->label('الصورة')
                    ->disk('public')
,

                TextColumn::make('order')
                    ->label('الترتيب')
                    ->sortable(),
            ])
                        ->defaultSort('order')
            ->reorderable('order')
            ->filters([
                //
            ])
            ->headerActions([
CreateAction::make()
    ->label(' اضافة فقره بصوره')
    ->color('success')
    ->icon('heroicon-o-plus'),
                    AssociateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DissociateAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DissociateBulkAction::make(),
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

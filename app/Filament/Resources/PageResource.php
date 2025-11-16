<?php

namespace App\Filament\Resources;

use App\Enum\PageStatusEnum;
use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected  static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('parent_id')
                        ->label('Parent Page')
                        ->relationship('parent', 'title')
                        ->nullable(),
                    TextInput::make('title')
                        ->required()
                        ->live(debounce: '1000')
                        ->afterStateUpdated(fn (Set $set,?string  $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug')->required(),
                    Textarea::make('description')->required(),
                    Select::make('status')->options([
                        PageStatusEnum::ACTIVE->value => PageStatusEnum::ACTIVE->getLabel(),
                        PageStatusEnum::INACTIVE->value => PageStatusEnum::INACTIVE->getLabel(),
                    ])->required(),
                ]),
                Section::make([
                    RichEditor::make('body')->required(),
                    FileUpload::make('image')->image()->required()->downloadable()->openable(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                TextColumn::make('parent.title')->searchable(),
                TextColumn::make('title')->searchable(),
                TextColumn::make('status')->badge(),
                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('created_at', 'desc')->reorderable('sort_order');
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}

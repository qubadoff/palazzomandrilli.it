<?php

namespace App\Filament\Resources;

use App\Enum\ExhibitionHallStatusEnum;
use App\Filament\Resources\ExhibitionHallResource\Pages;
use App\Models\ExhibitionHall;
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
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ExhibitionHallResource extends Resource
{
    protected static ?string $model = ExhibitionHall::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('title')
                        ->required()
                        ->live(debounce: '1000')
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug')->required(),
                    Textarea::make('description')->required(),
                    RichEditor::make('body')->required(),
                    Select::make('status')->options([
                        ExhibitionHallStatusEnum::ACTIVE->value => ExhibitionHallStatusEnum::ACTIVE->getLabel(),
                        ExhibitionHallStatusEnum::INACTIVE->value => ExhibitionHallStatusEnum::INACTIVE->getLabel(),
                    ])->required(),
                    FileUpload::make('image')->image()->required()->downloadable()->openable(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('status')->badge(),
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
            'index' => Pages\ListExhibitionHalls::route('/'),
            'create' => Pages\CreateExhibitionHall::route('/create'),
            'edit' => Pages\EditExhibitionHall::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Enum\EventStatusEnum;
use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('name')
                        ->required()
                        ->live(debounce: '1000')
                        ->afterStateUpdated(fn (Set $set,?string  $state) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug')->required(),
                    Textarea::make('description')->required(),
                    RichEditor::make('body')->required(),
                    DatePicker::make('event_date')->required(),
                    TimePicker::make('event_time')->required(),
                    TextInput::make('event_cost')->suffix('USD')->required()->numeric()->default(0),
                    Select::make('status')->options([
                        EventStatusEnum::ACTIVE->value => EventStatusEnum::ACTIVE->getLabel(),
                        EventStatusEnum::INACTIVE->value => EventStatusEnum::INACTIVE->getLabel(),
                    ])->required(),
                    FileUpload::make('image')->image()->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('event_date')->searchable(),
                Tables\Columns\TextColumn::make('event_time')->searchable(),
                Tables\Columns\TextColumn::make('event_cost')->suffix(' USD')->searchable(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}

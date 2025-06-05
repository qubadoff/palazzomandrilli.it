<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected  static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TextInput::make('site_name')->required(),
                    TextInput::make('site_description'),
                    TextInput::make('phone')->required(),
                    TextInput::make('email')->required(),
                    TextInput::make('location')->required(),
                    TextInput::make('opening_hours')->required(),
                    TextInput::make('facebook'),
                    TextInput::make('instagram'),
                    TextInput::make('linkedin'),
                    TextInput::make('x'),
                    TextInput::make('tiktok'),
                ]),
                Section::make([
                   Textarea::make('google_map_code')->required(),
                ]),
                Section::make([
                    FileUpload::make('logo_header')->image()->required(),
                    FileUpload::make('logo_footer')->image()->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('site_name')->searchable(),
                Tables\Columns\TextColumn::make('phone')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('opening_hours')->searchable(),
                Tables\Columns\ImageColumn::make('logo_header'),
                Tables\Columns\ImageColumn::make('logo_footer'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}

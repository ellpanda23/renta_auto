<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Models\Car;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('brand')
                    ->options([
                        'BWM' => 'BWM',
                        'Ford' => 'Ford',
                        'Mercedes-Benz' => 'Mercedes-Benz',
                        'Porsche' => 'Porsche',
                        'Toyota' => 'Toyota',
                        'Tesla' => 'Tesla',
                        'Volkswagen' => 'Volkswagen',
                        'Honda' => 'Honda',
                    ])
                    ->native(condition: false)
                    ->required(),
                TextInput::make('model')
                    ->required(),
                TextInput::make('license_plate')
                    ->required(),
                TextInput::make('image_url')
                    ->url()
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->required(),
                TextInput::make('year')
                    ->required(),
                TextInput::make('capacity')
                    ->required(),
                Select::make('fuel_type')
                    ->options([
                        Car::GASOLINA => 'Gasolina',
                        Car::DISEL => 'Disel',
                        Car::HYBRID => 'Hybrid',
                        Car::ELECTRIC => 'Electric',
                    ]),
                TextInput::make('daily_rate')
                    ->inputMode('decimal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand'),
                Tables\Columns\TextColumn::make('model'),
                Tables\Columns\TextColumn::make('license_plate'),
                Tables\Columns\TextColumn::make('year'),
                Tables\Columns\TextColumn::make('capacity'),
                Tables\Columns\TextColumn::make('fuel_type'),
                Tables\Columns\TextColumn::make('daily_rate'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make(),
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DistributionResource\Pages;
use App\Filament\Resources\DistributionResource\RelationManagers;
use App\Models\Distribution;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DistributionResource extends Resource
{
    protected static ?string $model = Distribution::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('recipient_name')
                    ->required(),
                Forms\Components\TextInput::make('recipient_contact')
                    ->nullable(),
                Forms\Components\TextInput::make('amount')
                    ->numeric()
                    ->required(),
                Forms\Components\Textarea::make('details')
                    ->required(),
                Forms\Components\FileUpload::make('item_image_path')
                    ->label('Item Image')
                    ->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('recipient_name'),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('details')->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\ImageColumn::make('item_image_path')->label('Item Image'),
            ])
            ->filters([
                // Add filters here
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDistributions::route('/'),
            'create' => Pages\CreateDistribution::route('/create'),
            'edit' => Pages\EditDistribution::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Master;

use App\Filament\Resources\Master\ExperienceResource\Pages;
use App\Filament\Resources\Master\ExperienceResource\RelationManagers;
use App\Models\master\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('company_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('company_role')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('joining_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('resign_date')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('job_type')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('joining_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('resign_date')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_type'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}

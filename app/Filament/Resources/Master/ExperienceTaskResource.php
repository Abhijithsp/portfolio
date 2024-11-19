<?php

namespace App\Filament\Resources\Master;

use App\Filament\Resources\Master\ExperienceTaskResource\Pages;
use App\Filament\Resources\Master\ExperienceTaskResource\RelationManagers;
use App\Models\master\ExperienceTask;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceTaskResource extends Resource
{
    protected static ?string $model = ExperienceTask::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('experience_id')
                    ->relationship('experience', 'id')
                    ->required(),
                Forms\Components\TextInput::make('experience_task_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('experience_task_description')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('experience.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('experience_task_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('experience_task_description')
                    ->searchable(),
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
            'index' => Pages\ListExperienceTasks::route('/'),
            'create' => Pages\CreateExperienceTask::route('/create'),
            'edit' => Pages\EditExperienceTask::route('/{record}/edit'),
        ];
    }
}

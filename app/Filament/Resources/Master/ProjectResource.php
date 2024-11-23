<?php

namespace App\Filament\Resources\Master;

use App\Filament\Resources\Master\ProjectResource\Pages;
use App\Filament\Resources\Master\ProjectResource\RelationManagers;
use App\Models\master\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('project_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('project_description')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('project_screenshot')
                    ->image()
                    ->columnSpan(2)
                    ->directory('projects')
                    ->required(),
                Forms\Components\TextInput::make('project_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('appstore_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('playstore_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('github_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('project_tags')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('project_screenshot')
                    ->searchable(),
                Tables\Columns\TextColumn::make('project_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('appstore_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('playstore_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('github_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('project_tags')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources\Master;

use App\Filament\Resources\Master\UserInfoResource\Pages;
use App\Filament\Resources\Master\UserInfoResource\RelationManagers;
use App\Models\master\UserInfo;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserInfoResource extends Resource
{
    protected static ?string $model = UserInfo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('username')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pro_nouns')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name')
                    ->columnSpan(2)
                    ->maxLength(255),
                FileUpload::make('user_photo')
                    ->image()
                    ->columnSpan(2)
                    ->directory('images'),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone_no')
                    ->numeric()
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Select::make('known_language')
                    ->options([
                        'English' => 'English',
                        'Malayalam' => 'Malayalam',
                        'Tamil' => 'Tamil',
                        'Hindi' => 'Hindi',
                    ])->multiple(),
                Forms\Components\TextInput::make('github_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linked_in_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram_url')
                    ->prefix('https://')
                    ->url()
                    ->maxLength(255),
                Forms\Components\Toggle::make('available_status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pro_nouns')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('user_photo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_no')
                    ->searchable(),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('known_language')
                    ->searchable(),
                Tables\Columns\TextColumn::make('github_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linked_in_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('instagram_url')
                    ->searchable(),
                Tables\Columns\IconColumn::make('available_status')
                    ->boolean(),
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
            'index' => Pages\ListUserInfos::route('/'),
            'create' => Pages\CreateUserInfo::route('/create'),
            'edit' => Pages\EditUserInfo::route('/{record}/edit'),
        ];
    }
}

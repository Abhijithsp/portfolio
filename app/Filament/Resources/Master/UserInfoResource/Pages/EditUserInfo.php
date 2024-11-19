<?php

namespace App\Filament\Resources\Master\UserInfoResource\Pages;

use App\Filament\Resources\Master\UserInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserInfo extends EditRecord
{
    protected static string $resource = UserInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

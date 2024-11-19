<?php

namespace App\Filament\Resources\Master\UserInfoResource\Pages;

use App\Filament\Resources\Master\UserInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserInfos extends ListRecords
{
    protected static string $resource = UserInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

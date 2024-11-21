<?php

namespace App\Filament\Resources\Master\TechStackResource\Pages;

use App\Filament\Resources\Master\TechStackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechStack extends EditRecord
{
    protected static string $resource = TechStackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

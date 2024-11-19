<?php

namespace App\Filament\Resources\Master\TechStackResource\Pages;

use App\Filament\Resources\Master\TechStackResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechStacks extends ListRecords
{
    protected static string $resource = TechStackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Master\ExperienceTaskResource\Pages;

use App\Filament\Resources\Master\ExperienceTaskResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExperienceTasks extends ListRecords
{
    protected static string $resource = ExperienceTaskResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

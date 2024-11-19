<?php

namespace App\Filament\Resources\Master\ExperienceResource\Pages;

use App\Filament\Resources\Master\ExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExperiences extends ListRecords
{
    protected static string $resource = ExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

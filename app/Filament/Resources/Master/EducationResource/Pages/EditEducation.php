<?php

namespace App\Filament\Resources\Master\EducationResource\Pages;

use App\Filament\Resources\Master\EducationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEducation extends EditRecord
{
    protected static string $resource = EducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Master\PhotoGalleryResource\Pages;

use App\Filament\Resources\Master\PhotoGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhotoGallery extends EditRecord
{
    protected static string $resource = PhotoGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

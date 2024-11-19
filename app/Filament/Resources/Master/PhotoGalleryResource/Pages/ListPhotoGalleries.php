<?php

namespace App\Filament\Resources\Master\PhotoGalleryResource\Pages;

use App\Filament\Resources\Master\PhotoGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhotoGalleries extends ListRecords
{
    protected static string $resource = PhotoGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

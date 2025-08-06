<?php

namespace App\Filament\Resources\MainPlaceSliderResource\Pages;

use App\Filament\Resources\MainPlaceSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMainPlaceSliders extends ListRecords
{
    protected static string $resource = MainPlaceSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}

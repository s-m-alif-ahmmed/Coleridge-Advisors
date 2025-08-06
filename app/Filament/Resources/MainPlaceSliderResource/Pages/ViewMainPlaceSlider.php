<?php

namespace App\Filament\Resources\MainPlaceSliderResource\Pages;

use App\Filament\Resources\MainPlaceSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMainPlaceSlider extends ViewRecord
{
    protected static string $resource = MainPlaceSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

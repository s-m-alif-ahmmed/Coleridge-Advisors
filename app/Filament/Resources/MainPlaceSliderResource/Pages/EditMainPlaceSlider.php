<?php

namespace App\Filament\Resources\MainPlaceSliderResource\Pages;

use App\Filament\Resources\MainPlaceSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainPlaceSlider extends EditRecord
{
    protected static string $resource = MainPlaceSliderResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
        ];
    }
}

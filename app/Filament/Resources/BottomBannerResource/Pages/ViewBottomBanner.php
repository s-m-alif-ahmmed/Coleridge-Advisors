<?php

namespace App\Filament\Resources\BottomBannerResource\Pages;

use App\Filament\Resources\BottomBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBottomBanner extends ViewRecord
{
    protected static string $resource = BottomBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

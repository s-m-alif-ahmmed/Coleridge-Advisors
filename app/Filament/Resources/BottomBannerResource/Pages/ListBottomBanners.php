<?php

namespace App\Filament\Resources\BottomBannerResource\Pages;

use App\Filament\Resources\BottomBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBottomBanners extends ListRecords
{
    protected static string $resource = BottomBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}

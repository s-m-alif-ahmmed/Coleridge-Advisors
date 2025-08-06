<?php

namespace App\Filament\Resources\BottomBannerResource\Pages;

use App\Filament\Resources\BottomBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBottomBanner extends EditRecord
{
    protected static string $resource = BottomBannerResource::class;

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

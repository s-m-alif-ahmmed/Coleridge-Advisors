<?php

namespace App\Filament\Resources\OurTeamResource\Pages;

use App\Filament\Resources\OurTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOurTeam extends ViewRecord
{
    protected static string $resource = OurTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

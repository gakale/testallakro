<?php

namespace App\Filament\Resources\OpportuniteResource\Pages;

use App\Filament\Resources\OpportuniteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpportunite extends EditRecord
{
    protected static string $resource = OpportuniteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

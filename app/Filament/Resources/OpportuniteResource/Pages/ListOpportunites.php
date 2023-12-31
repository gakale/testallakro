<?php

namespace App\Filament\Resources\OpportuniteResource\Pages;

use App\Filament\Resources\OpportuniteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpportunites extends ListRecords
{
    protected static string $resource = OpportuniteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

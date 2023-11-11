<?php

namespace App\Filament\Resources\Soal2Resource\Pages;

use App\Filament\Resources\Soal2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoal2s extends ListRecords
{
    protected static string $resource = Soal2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Soal1Resource\Pages;

use App\Filament\Resources\Soal1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoal1s extends ListRecords
{
    protected static string $resource = Soal1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Soal3Resource\Pages;

use App\Filament\Resources\Soal3Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSoal3s extends ListRecords
{
    protected static string $resource = Soal3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

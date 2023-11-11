<?php

namespace App\Filament\Resources\Soal1Resource\Pages;

use App\Filament\Resources\Soal1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoal1 extends EditRecord
{
    protected static string $resource = Soal1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

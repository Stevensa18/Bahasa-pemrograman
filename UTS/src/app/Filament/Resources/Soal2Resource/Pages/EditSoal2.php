<?php

namespace App\Filament\Resources\Soal2Resource\Pages;

use App\Filament\Resources\Soal2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoal2 extends EditRecord
{
    protected static string $resource = Soal2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

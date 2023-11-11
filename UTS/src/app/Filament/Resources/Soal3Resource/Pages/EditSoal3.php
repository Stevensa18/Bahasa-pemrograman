<?php

namespace App\Filament\Resources\Soal3Resource\Pages;

use App\Filament\Resources\Soal3Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSoal3 extends EditRecord
{
    protected static string $resource = Soal3Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\DadJokeResource\Pages;

use App\Filament\Resources\DadJokeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDadJoke extends EditRecord
{
    protected static string $resource = DadJokeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

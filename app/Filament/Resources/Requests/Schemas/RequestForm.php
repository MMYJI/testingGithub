<?php

namespace App\Filament\Resources\Requests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('request_number')
                    ->required(),
                Textarea::make('request_details')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}

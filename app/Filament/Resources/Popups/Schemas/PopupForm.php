<?php

namespace App\Filament\Resources\Popups\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PopupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('url')
                    ->url()
                    ->nullable(),

                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),

                FileUpload::make('image')
                    ->directory('popups')
                    ->image()
                    ->required(),

                Toggle::make('status')
                    ->label('Publicado')
                    ->required(),
            ]);
    }
}

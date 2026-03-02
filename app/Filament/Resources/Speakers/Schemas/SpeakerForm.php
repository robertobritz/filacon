<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label(__('Name')),
                Textarea::make('bio')
                    ->columnSpanFull()
                    ->label(__('Bio')),
                TextInput::make('photo')
                    ->label(__('Photo')),
                Textarea::make('social_links')
                    ->columnSpanFull()
                    ->label(__('Social links')),
            ]);
    }
}

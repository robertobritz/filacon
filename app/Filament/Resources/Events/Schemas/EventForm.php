<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->label(__('Name')),
                TextInput::make('title')
                    ->required()
                    ->label(__('Title')),
                TextInput::make('slug')
                    ->required()
                    ->label(__('Slug')),
                Textarea::make('description')
                    ->columnSpanFull()
                    ->label(__('Description')),
                FileUpload::make('background_image')
                    ->image()
                    ->label(__('Background image')),
                TextInput::make('location')
                    ->label(__('Location')),
                TextInput::make('status')
                    ->required()
                    ->default('active')
                    ->label(__('Status')),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Tickets\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TicketForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('event_id')
                    ->relationship('event', 'name')
                    ->required()
                    ->label(__('Event id')),
                TextInput::make('name')
                    ->required()
                    ->label(__('Name')),
                Textarea::make('description')
                    ->columnSpanFull()
                    ->label(__('Description')),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$')
                    ->label(__('Price')),
                TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->label(__('Stock')),
                Textarea::make('benefits')
                    ->columnSpanFull()
                    ->label(__('Benefits')),
                TextInput::make('sort')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->label(__('Sort')),
                Toggle::make('vip')
                    ->required()
                    ->label(__('Vip')),
                Toggle::make('active')
                    ->required()
                    ->label(__('Active')),
            ]);
    }
}

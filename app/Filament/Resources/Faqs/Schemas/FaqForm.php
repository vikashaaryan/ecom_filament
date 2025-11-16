<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')->rules('required|string|max:255')->placeholder('FAQ Question')->live(),
                RichEditor::make('answer')->required()->columnSpan(2),
                Select::make('status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ])->required(),
            ]);

    }
}

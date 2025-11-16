<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use GuzzleHttp\Psr7\UploadedFile;

class MemberForm
{
   
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->rules('required|string|max:255')->placeholder('Full Name')->live(),
                TextInput::make('designation')->rules('required|string|max:255')->placeholder('Designation')->live(),
                TextInput::make('fb_url')->url()->label('Facebook URL')->rules('nullable|url|max:255')->placeholder('https://facebook.com/username'),
                TextInput::make('tw_url')->url()->label('Twitter URL')->rules('nullable|url|max:255')->placeholder('https://twitter.com/username'),
                TextInput::make('ln_url')->url()->label('Instagram URL')->rules('nullable|url|max:255')->placeholder('https://instagram.com/username'),
                FileUpload::make('image')->label('Profile Image')->rules('nullable|image|max:2048'),
                Select::make('status')
                    ->options([
                        1 => 'Active',
                        0 => 'Inactive',
                    ]),
            ]);
    }
}

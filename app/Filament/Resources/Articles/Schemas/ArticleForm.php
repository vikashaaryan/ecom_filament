<?php

namespace App\Filament\Resources\Articles\Schemas;

use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')->rules('required|string|max:255')->placeholder('Article Title')->live(),
                TextInput::make('author')->rules('required|string|max:255')->placeholder('Author Name')->live(),
                Select::make('category_id')->options(Category::all()->pluck('name', 'id'))->rules('required|exists:categories,id')->label('Category'),

                FileUpload::make('image')->label('Article Image')->rules('required|image|max:2048'),
                RichEditor::make('content')->placeholder('Article Content')->live(),
            ]);
    }
}

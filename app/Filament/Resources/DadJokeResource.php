<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DadJokeResource\Pages;
use App\Filament\Resources\DadJokeResource\RelationManagers;
use App\Models\DadJoke;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class DadJokeResource extends Resource
{
    protected static ?string $model = DadJoke::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\MarkdownEditor::make('text_content')
                    ->required()
                    ->maxLength(65535)
                    ->label('Joke Content')
                    ->placeholder('Enter your dad joke here')
                    ->hint('Max 65,535 characters')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Joke Image')
                    ->directory('uploads/posts') // Directory where images will be stored
                    ->visibility('public')
                    ->placeholder('Upload an image for the joke')
                    ->hint('Max 10MB')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('text_content')
                    ->label('Joke Content')
                    ->limit(50)
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDadJokes::route('/'),
            'create' => Pages\CreateDadJoke::route('/create'),
            'edit' => Pages\EditDadJoke::route('/{record}/edit'),
        ];
    }
}

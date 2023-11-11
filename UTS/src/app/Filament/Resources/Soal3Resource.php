<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Soal3Resource\Pages;
use App\Filament\Resources\Soal3Resource\RelationManagers;
use App\Models\Soal3;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class Soal3Resource extends Resource
{
    protected static ?string $model = Soal3::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('name')
                    ->label('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->label('phone')
                    ->required()
                    ->maxLength(255),
                TextInput::make('address')
                    ->label('address')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('phone')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
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
            'index' => Pages\ListSoal3s::route('/'),
            'create' => Pages\CreateSoal3::route('/create'),
            'edit' => Pages\EditSoal3::route('/{record}/edit'),
        ];
    }
}

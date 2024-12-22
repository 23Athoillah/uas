<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostJurusanResource\Pages;
use App\Filament\Resources\PostJurusanResource\RelationManagers;
use App\Models\PostJurusan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostJurusanResource extends Resource
{
    protected static ?string $model = PostJurusan::class ;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),
            Forms\Components\Select::make('jurusan_id')
                ->relationship('jurusan', 'jurusan_name')
                ->required(),
            Forms\Components\Radio::make('kat')
                ->options([
                    1 => 'Pilihan 1',
                    2 => 'Pilihan 2',
                    3 => 'Pilihan 3',
                ])
                ->required()
                ->default(1), // Default pilihan
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('user.name')->label('Nama User')->searchable(),
            Tables\Columns\TextColumn::make('jurusan.jurusan_name')->label('Nama Jurusan'),
            Tables\Columns\TextColumn::make('kat')->label('Pilihan')
                ->formatStateUsing(fn ($state) => match ($state) {
                    1 => 'Pilihan 1',
                    2 => 'Pilihan 2',
                    3 => 'Pilihan 3',
                }),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPostJurusans::route('/'),
            'create' => Pages\CreatePostJurusan::route('/create'),
            'edit' => Pages\EditPostJurusan::route('/{record}/edit'),
        ];
    }    
}

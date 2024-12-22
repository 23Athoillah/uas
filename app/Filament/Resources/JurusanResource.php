<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurusanResource\Pages;
use App\Filament\Resources\JurusanResource\RelationManagers;
use App\Models\Jurusan;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            // Form Field untuk jurusan_name
            Forms\Components\TextInput::make('jurusan_name')
                ->label('Nama Jurusan')
                ->required()
                ->maxLength(100)
                ->unique()
                ->reactive(),

            // Form Field untuk jurusan_prodi
            Forms\Components\TextInput::make('jurusan_prodi')
                ->label('Program Studi')
                ->nullable()
                ->maxLength(100),

            // Form Field untuk jurusan_bidstudi
            Forms\Components\TextInput::make('jurusan_bidstudi')
                ->label('Bidang Studi')
                ->nullable()
                ->maxLength(100),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            // Kolom untuk jurusan_name
            Tables\Columns\TextColumn::make('jurusan_name')
                ->label('Nama Jurusan')
                ->searchable(),

            // Kolom untuk jurusan_prodi
            Tables\Columns\TextColumn::make('jurusan_prodi')
                ->label('Program Studi')
                ->limit(50),

            // Kolom untuk jurusan_bidstudi
            Tables\Columns\TextColumn::make('jurusan_bidstudi')
                ->label('Bidang Studi')
                ->limit(50),
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
            'index' => Pages\ListJurusans::route('/'),
            'create' => Pages\CreateJurusan::route('/create'),
            'edit' => Pages\EditJurusan::route('/{record}/edit'),
        ];
    }    
}

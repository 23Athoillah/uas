<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NilaiResource\Pages;
use App\Filament\Resources\NilaiResource\RelationManagers;
use App\Models\Nilai;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
           
        ->schema([
            // Form Field untuk nilai_name
            Forms\Components\TextInput::make('nilai_name')
                ->label('Nama Nilai')
                ->required()
                ->maxLength(100)
                ->unique(),

            // Form Field untuk nilai_kkm
            Forms\Components\TextInput::make('nilai_kkm')
                ->label('Nilai KKM')
                ->required()
                
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            // Kolom untuk nilai_name
            Tables\Columns\TextColumn::make('nilai_name')
                ->label('Nama Nilai')
                ->searchable(),

            // Kolom untuk nilai_kkm
            Tables\Columns\TextColumn::make('nilai_kkm')
                ->label('Nilai KKM')
                ->sortable()
                
                ->default(0),
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
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }    
}

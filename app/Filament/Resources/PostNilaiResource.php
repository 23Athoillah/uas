<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostNilaiResource\Pages;
use App\Filament\Resources\PostNilaiResource\RelationManagers;
use App\Models\PostNilai;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostNilaiResource extends Resource
{
    protected static ?string $model = PostNilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('user.name')->label('User Name'),
                Tables\Columns\TextColumn::make('nilai.nilai_name')->label('Nilai Name'),
                Tables\Columns\TextColumn::make('score_s1')->label('Score S1'),
                Tables\Columns\TextColumn::make('score_s2')->label('Score S2'),
                Tables\Columns\TextColumn::make('score_s3')->label('Score S3'),
                Tables\Columns\TextColumn::make('score_s4')->label('Score S4'),
                Tables\Columns\TextColumn::make('score_s5')->label('Score S5'),
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
            'index' => Pages\ListPostNilais::route('/'),
            'create' => Pages\CreatePostNilai::route('/create'),
            'edit' => Pages\EditPostNilai::route('/{record}/edit'),
        ];
    }    
}

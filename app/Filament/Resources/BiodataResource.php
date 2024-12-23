<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BiodataResource\Pages;
use App\Filament\Resources\BiodataResource\RelationManagers;
use App\Models\Biodata;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BiodataResource extends Resource
{
    protected static ?string $model = Biodata::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                forms\Components\TextInput::make('user_id')
                    ->required()
                    ->maxLength(255),
                    
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required()
                    ->maxLength(50),
                Forms\Components\DatePicker::make('tgl_lahir')
                    ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('agama')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('alamat_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('jalur_tes')
                    ->label('Jalur Tes')
                    ->options([
                        'Reguler' => 'Reguler',
                        'Beasiswa' => 'Beasiswa',
                    ])
                    ->required(),
                Forms\Components\Select::make('konfirmasi')
                    ->label('Konfirmasi')
                    ->options([
                        'Ya' => 'Ya',
                        'Tidak' => 'Tidak',
                    ])
                    ->required(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Non-Aktif' => 'Non-Aktif',
                    ])
                    ->required(),

                    forms\Components\FileUpload::make('img_user')
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\ImageColumn::make('img_user')->label('Image'),
            Tables\Columns\TextColumn::make('id')->label('ID'),
            Tables\Columns\TextColumn::make('user.name')->label('Nama User')->searchable(),
            Tables\Columns\TextColumn::make('nama_lengkap')->limit(50),
            Tables\Columns\TextColumn::make('nik')->limit(50),
            Tables\Columns\TextColumn::make('tempat_lahir')->limit(50),
            Tables\Columns\TextColumn::make('tgl_lahir')->date(),
            Tables\Columns\TextColumn::make('jenis_kelamin'),
            Tables\Columns\TextColumn::make('agama')->limit(50),
            Tables\Columns\TextColumn::make('alamat_lengkap')->limit(50),
            Tables\Columns\TextColumn::make('jalur_tes')->label('Jalur Tes'),
            Tables\Columns\TextColumn::make('konfirmasi')->label('Konfirmasi'),
            Tables\Columns\TextColumn::make('status')->label('Status'),
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
            'index' => Pages\ListBiodatas::route('/'),
            'create' => Pages\CreateBiodata::route('/create'),
            'edit' => Pages\EditBiodata::route('/{record}/edit'),
        ];
    }    
}

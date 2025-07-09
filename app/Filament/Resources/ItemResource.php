<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationGroup = 'Manajemen Layanan';
    protected static ?string $navigationLabel = 'Data Barang';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nomor_resi')
                        ->label('Nomor Resi')
                        ->disabled()
                        ->helperText('Diisi otomatis'),
                        TextInput::make('nama_barang')
                            ->label('Nama Barang')
                            ->required(),
                        TextInput::make('berat')
                            ->label('Berat (kg)')
                            ->numeric()
                            ->required(),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'masuk' => 'Masuk',
                                'keluar' => 'Keluar',
                                'gudang' => 'Gudang',
                            ])
                            ->required()
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nomor_resi')->sortable()->searchable(),
                TextColumn::make('nama_barang')->sortable()->searchable(),
                TextColumn::make('berat')->label('Berat (kg)')->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'success' => 'masuk',
                        'danger' => 'keluar',
                        'warning' => 'gudang',
                    ])
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}

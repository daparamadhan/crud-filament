<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShipmentResource\Pages;
use App\Models\Shipment;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MultiSelect;
use Filament\Tables\Columns\TextColumn;

class ShipmentResource extends Resource
{
    protected static ?string $model = Shipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';
    protected static ?string $navigationGroup = 'Manajemen Layanan';
    protected static ?string $navigationLabel = 'Data Pengiriman';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Card::make()
                ->schema([
                    TextInput::make('kode_pengiriman')
                        ->label('Kode Pengiriman')
                        ->disabled()
                        ->dehydrated(), // pastikan tetap dikirim ke DB walau disabled
                    TextInput::make('asal')
                        ->label('Asal')
                        ->required(),
                    TextInput::make('tujuan')
                        ->label('Tujuan')
                        ->required(),
                    TextInput::make('ongkir')
                        ->label('Ongkir')
                        ->numeric()
                        ->required(),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'proses' => 'Proses',
                            'dikirim' => 'Dikirim',
                            'selesai' => 'Selesai',
                        ])
                        ->required(),
                    MultiSelect::make('items')
                        ->label('Barang yang Dikirim')
                        ->relationship('items', 'nama_barang')
                        ->required(),
                ])
                ->columns(2),
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pengiriman')->sortable()->searchable(),
                TextColumn::make('asal')->sortable(),
                TextColumn::make('tujuan')->sortable(),
                TextColumn::make('ongkir')->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'warning' => 'proses',
                        'info' => 'dikirim',
                        'success' => 'selesai',
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
            'index' => Pages\ListShipments::route('/'),
            'create' => Pages\CreateShipment::route('/create'),
            'edit' => Pages\EditShipment::route('/{record}/edit'),
        ];
    }
}

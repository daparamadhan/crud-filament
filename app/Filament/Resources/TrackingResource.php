<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrackingResource\Pages;
use App\Models\Tracking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;

class TrackingResource extends Resource
{
    protected static ?string $model = Tracking::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationGroup = 'Manajemen Layanan';
    protected static ?string $navigationLabel = 'Tracking Paket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('shipment_id')
                            ->label('Kode Pengiriman')
                            ->relationship('shipment', 'kode_pengiriman')
                            ->searchable()
                            ->required(),
                        TextInput::make('lokasi')
                            ->label('Lokasi')
                            ->required(),
                        Select::make('keterangan')
                            ->label('Keterangan')
                            ->options([
                                'Menuju gudang' => 'Menuju gudang',
                                'Sedang dalam perjalanan' => 'Sedang dalam perjalanan',
                                'Paket diterima' => 'Paket diterima',
                            ])
                            ->required(),
                        DateTimePicker::make('waktu')
                            ->label('Waktu')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('shipment.kode_pengiriman')
                    ->label('Kode Pengiriman')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('lokasi')->sortable()->searchable(),
                TextColumn::make('keterangan')->sortable(),
                TextColumn::make('waktu')
                    ->label('Waktu Update')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
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
            'index' => Pages\ListTrackings::route('/'),
            'create' => Pages\CreateTracking::route('/create'),
            'edit' => Pages\EditTracking::route('/{record}/edit'),
        ];
    }
}

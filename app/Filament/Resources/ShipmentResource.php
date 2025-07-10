<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShipmentResource\Pages;
use App\Models\Shipment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

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
                Card::make()->schema([

                    Grid::make(2)->schema([
                        TextInput::make('kode_pengiriman')
                            ->label('Kode Pengiriman')
                            ->disabled()
                            ->dehydrated(false)
                            ->default(fn () => 'TRK' . strtoupper(uniqid())),

                        DateTimePicker::make('pickup_time')
                            ->label('Waktu Penjemputan')
                            ->nullable(),

                        DateTimePicker::make('estimated_arrival')
                            ->label('Estimasi Tiba')
                            ->nullable(),
                    ]),

                    Grid::make(2)->schema([
                        TextInput::make('sender_name')->label('Nama Pengirim')->required(),
                        TextInput::make('sender_phone')->label('Telepon Pengirim')->required(),
                        TextInput::make('receiver_name')->label('Nama Penerima')->required(),
                        TextInput::make('receiver_phone')->label('Telepon Penerima')->required(),
                    ]),

                    Select::make('package_size')
                        ->label('Ukuran Paket')
                        ->options([
                            'small' => 'Small (20×20×8 cm)',
                            'medium' => 'Medium (30×20×12 cm)',
                            'large' => 'Large (35×30×25 cm)',
                            'custom' => 'Custom (Max 50×50×50 cm)',
                        ])
                        ->required(),

                    Grid::make(3)->schema([
                        TextInput::make('custom_length')->label('Panjang (cm)')->numeric()->nullable(),
                        TextInput::make('custom_width')->label('Lebar (cm)')->numeric()->nullable(),
                        TextInput::make('custom_height')->label('Tinggi (cm)')->numeric()->nullable(),
                    ]),

                    Select::make('item_type')
                        ->label('Jenis Barang')
                        ->options([
                            'dokumen' => 'Dokumen',
                            'elektronik' => 'Elektronik',
                            'pakaian' => 'Pakaian',
                            'sepatu' => 'Sepatu',
                            'makanan_kering' => 'Makanan Kering',
                            'makanan_basah' => 'Makanan Basah',
                            'ikan_hias' => 'Ikan Hias',
                            'tanaman' => 'Tanaman',
                            'kosmetik' => 'Kosmetik / Skincare',
                            'obat' => 'Obat-obatan',
                            'aksesoris' => 'Aksesoris',
                            'peralatan_rumah' => 'Peralatan Rumah Tangga',
                            'lainnya' => 'Lainnya',
                        ])
                        ->required(),

                    Toggle::make('fragile')->label('Fragile'),
                    Toggle::make('insurance')->label('Asuransi Tambahan'),

                    TextInput::make('extra_packaging_name')->label('Nama Extra Packaging')->nullable(),
                    TextInput::make('extra_packaging_price')->label('Harga Extra Packaging')->numeric()->minValue(1)->nullable(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_pengiriman')->label('No Resi')->searchable(),
                TextColumn::make('sender_name')->label('Pengirim')->searchable(),
                TextColumn::make('receiver_name')->label('Penerima')->searchable(),
                TextColumn::make('pickup_time')->label('Pickup')->dateTime(),
                TextColumn::make('estimated_arrival')->label('Tiba')->dateTime(),
                TextColumn::make('package_size')->label('Ukuran'),
                TextColumn::make('item_type')->label('Jenis Barang'),
                IconColumn::make('fragile')->label('Fragile')->boolean(),
                IconColumn::make('insurance')->label('Asuransi')->boolean(),
                TextColumn::make('extra_packaging_name')->label('Extra Packaging'),
                TextColumn::make('extra_packaging_price')->label('Harga Packaging')->money('IDR'),
            ])
            ->filters([])
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
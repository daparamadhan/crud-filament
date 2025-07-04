<?php

namespace App\Filament\Resources\ShipmentResource\Pages;

use App\Models\Item;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ShipmentResource;

class EditShipment extends EditRecord
{
    protected static string $resource = ShipmentResource::class;

    protected function afterSave(): void
    {
        // ambil id item yg diupdate
        $items = $this->record->items()->pluck('item.id');
        // update status item menjadi 'keluar'
        Item::whereIn('id', $items)->update(['status' => 'keluar']);
    }
}

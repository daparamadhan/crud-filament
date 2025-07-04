<?php

namespace App\Filament\Resources\ShipmentResource\Pages;

use App\Models\Item;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ShipmentResource;

class CreateShipment extends CreateRecord
{
    protected static string $resource = ShipmentResource::class;

    protected function afterCreate(): void
    {
        $items = $this->record->items()->pluck('item.id');
        Item::whereIn('id', $items)->update(['status' => 'keluar']);
    }
}

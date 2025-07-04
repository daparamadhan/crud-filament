<?php

namespace App\Filament\Resources\TrackingResource\Pages;

use App\Filament\Resources\TrackingResource;
use Filament\Resources\Pages\EditRecord;

class EditTracking extends EditRecord
{
    protected static string $resource = TrackingResource::class;

    protected function afterSave(): void
    {
        $shipment = $this->record->shipment;

        if ($shipment) {
            if ($this->record->keterangan === 'Paket diterima') {
                $shipment->status = 'selesai';
            } elseif ($shipment->status === 'proses') {
                $shipment->status = 'dikirim';
            }
            $shipment->save();
        }
    }
}

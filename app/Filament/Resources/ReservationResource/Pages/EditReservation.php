<?php

namespace App\Filament\Resources\ReservationResource\Pages;

use App\Filament\Resources\ReservationResource;
use App\Models\Reservation;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReservation extends EditRecord
{
    protected static string $resource = ReservationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $reservation = $this->record;

        if($reservation->status == Reservation::COMPLETED || $reservation->status == Reservation::CANCELLED)
        {
            $car = $reservation->car;
            $car->is_available = true;
            $car->save();
        }
        if($reservation->status == Reservation::CONFIRMED || $reservation->status == Reservation::PENDING)
        {
            $car = $reservation->car;
            $car->is_available = false;
            $car->save();
        }
    }
}

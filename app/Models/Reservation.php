<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'customer_id',
        'start_date',
        'end_date',
        'total_cost',
        'status',
    ];

    // Relación: Una reservación pertenece a un auto
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // Relación: Una reservación pertenece a un cliente
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relación: Una reservación puede tener un pago
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}

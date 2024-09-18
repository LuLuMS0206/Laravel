<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookings extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest',
        'check_in',
        'check_out',
        'room_type',
        'special_request',
        'status',
        'order_date',
    ];
}

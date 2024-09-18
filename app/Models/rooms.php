<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'room_number',
        'room_type',
        'price',
        'offer_price',
        'status',
        'availability',
    ];
}

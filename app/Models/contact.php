<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'client_name',
        'client_email',
        'client_phone',
        'subject',
        'comment',
        'status',
    ];
}

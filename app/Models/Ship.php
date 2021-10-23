<?php

namespace App\Models;
use App\Http\Controllers\ShipController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;

    protected $fillable =[
        'destination',
        'ship_class',
        'distance',
        'departure_time',

    ];
}

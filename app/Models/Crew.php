<?php

namespace App\Models;
use App\Http\Controllers\CrewController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable =[
        'ship_id',
        'crew_name',
        'rank',

    ];

}

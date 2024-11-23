<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travels extends Model
{
    /** @use HasFactory<\Database\Factories\TravelsFactory> */
    use HasFactory;
    protected $primaryKey = 'travel_id';

    protected $fillable = [
        'travel_id',
        'evaluation',
        'flight_id',
        'user_id',
    ];
}

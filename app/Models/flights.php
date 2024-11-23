<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    /** @use HasFactory<\Database\Factories\FlightsFactory> */
    use HasFactory;

    protected $primaryKey = 'flight_id';

    protected $fillable = [
        'flight_id',
        'date',
        'airline_id',
        'limit',
    ];
}

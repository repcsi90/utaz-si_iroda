<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airlines extends Model
{
    /** @use HasFactory<\Database\Factories\AirlinesFactory> */
    use HasFactory;

    protected $primaryKey = 'airline_id';

    protected $fillable = [
        'airline_id',
        'name',
        'country',
    ];
}

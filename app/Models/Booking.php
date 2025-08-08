<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    // app/Models/Booking.php

protected $fillable = [
    'arrival_date',
    'departure_date',
    'cabana',
    'guests',
    'children',
];

}

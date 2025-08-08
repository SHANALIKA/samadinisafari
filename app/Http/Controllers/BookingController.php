<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
public function store(Request $request)
{
    // Validate
    $validated = $request->validate([
        'arrival_date' => 'required|date',
        'departure_date' => 'required|date|after_or_equal:arrival_date',
        'cabana' => 'required|string',
        'guests' => 'required|integer|min:1',
        'children' => 'required|integer|min:0',
    ]);

    // Save to database
    \App\Models\Booking::create($validated);

    // Redirect to success page
    return redirect()->route('booking.success');
}
}

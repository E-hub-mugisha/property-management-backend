<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BookingProperty;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(BookingProperty::with('property')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    // Store a new booking
    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        $booking = BookingProperty::create($request->all());

        return response()->json([
            'message' => 'Booking successful!',
            'booking' => $booking
        ], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = BookingProperty::with('property')->find($id);
        if (!$booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }
        return response()->json($booking);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

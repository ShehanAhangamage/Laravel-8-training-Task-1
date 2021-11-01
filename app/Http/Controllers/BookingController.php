<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return view('/list', ['bookings' => Booking::all()]);
    }

    public function add()
    {
        return view('/add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'check_in' => ['required', 'date'],
            'check_out' => ['required', 'date'],
            'full_name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'address' => ['required'],
            'city' => ['required', 'max:100'],
            'zip' => ['required', 'max:5'],
            'country' => ['required', 'max:100'],
            'status' => ['required', 'max:20'],
        ]);
        $booking = new Booking();
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->full_name = $request->full_name;
        $booking->email = $request->email;
        $booking->address = $request->address;
        $booking->city = $request->city;
        $booking->zip = $request->zip;
        $booking->country = $request->country;
        $booking->status = $request->status;
        $booking->save();
        return redirect('/');
    }

    public function edit(Booking $booking)
    {
        return view('/edit', ['booking' => $booking]);
    }

    public function update(Request $request, Booking $booking)
    {
        $this->validate($request, [
            'check_in' => ['required', 'date'],
            'check_out' => ['required', 'date'],
            'full_name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'address' => ['required'],
            'city' => ['required', 'max:100'],
            'zip' => ['required', 'max:5'],
            'country' => ['required', 'max:100'],
            'status' => ['required', 'max:20'],
        ]);
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->full_name = $request->full_name;
        $booking->email = $request->email;
        $booking->address = $request->address;
        $booking->city = $request->city;
        $booking->zip = $request->zip;
        $booking->country = $request->country;
        $booking->status = $request->status;
        $booking->save();
        return redirect('/');
    }

    public function delete(Request $request, Booking $booking)
    {
        $booking->delete();
        return redirect('/');
    }
}

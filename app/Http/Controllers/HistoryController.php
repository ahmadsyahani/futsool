<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('history', compact('bookings'));
    }
}
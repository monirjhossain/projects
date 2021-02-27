<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function reservation()
    {
        return view('backend.reservation.index');
    }
}

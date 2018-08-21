<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ReservationsController extends Controller
{
    //
    public function bookRoom(){
        return view('reservations/bookRoom');
    }
}

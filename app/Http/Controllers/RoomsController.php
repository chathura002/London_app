<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoomsController extends Controller
{
    //
    public function checkAvailableRooms(){
        return view('rooms/checkAvailableRooms');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContentsController extends Controller
{
    //
    public function home(){
        $data = [];
        $data['version'] = '1.0.2';
        return view('contents/home',$data);
    }
}

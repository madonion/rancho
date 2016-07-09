<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class accommodationsController extends Controller
{
    //
    public function index(\App\Accommodation $accommodations){
        $data = $accommodations::all();
        //dd($data);
        return view('pages/rooms')->with('data',$data);
    }

    public function getAccommodation(\App\Accommodation $accommodations)
    {
        //dd( view());
        return view('pages/room');
    }
}

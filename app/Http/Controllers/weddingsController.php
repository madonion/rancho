<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class weddingsController extends Controller
{
    //
    function index(){
        return view('pages.weddings');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// room not rooms!!!!!!
class roomController extends Controller
{
    //
    public function index($id){
        $data =
            ['url'=> 'rooms/room-1','name'=> $id,'description'=>'room description'];
        return view('pages/room')->with('data',$data);
    }
}

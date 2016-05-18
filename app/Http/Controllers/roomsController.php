<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class roomsController extends Controller
{
    //
    public function index(){
        $data = [
            ['url'=> 'rooms/room-1','name'=>'room 1','description'=>'room description'],
            ['url'=> 'rooms/room-2','name'=>'room 2','description'=>'room description'],
            ['url'=> 'rooms/room-3','name'=>'room 3','description'=>'room description'],
            ['url'=> 'rooms/room-4','name'=>'room 4','description'=>'room description'],
            ['url'=> 'rooms/room-5','name'=>'room 5','description'=>'room description'],
            ['url'=> 'rooms/room-6','name'=>'room 6','description'=>'room description'],
            ['url'=> 'rooms/room-7','name'=>'room 7','description'=>'room description'],
            ['url'=> 'rooms/room-8','name'=>'room 8','description'=>'room description'],
            ['url'=> 'rooms/room-9','name'=>'room 9','description'=>'room description'],
            ['url'=> 'rooms/room-10','name'=>'room 10','description'=>'room description'],
        ];
        return view('pages/rooms')->with('data',$data);
    }
}

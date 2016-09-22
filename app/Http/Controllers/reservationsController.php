<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class reservationsController extends Controller
{
    //
    public function index(){
        $data = [
            ['name'=>'room 1','price'=>100, 'capacity'=>2],
            ['name'=>'room 2','price'=>100, 'capacity'=>2],
            ['name'=>'room 3','price'=>100, 'capacity'=>4],
            ['name'=>'room 4','price'=>100, 'capacity'=>2],
            ['name'=>'room 5','price'=>100, 'capacity'=>2],
            ['name'=>'room 6','price'=>100, 'capacity'=>2],
            ['name'=>'room 7','price'=>100, 'capacity'=>2],
            ['name'=>'room 8','price'=>100, 'capacity'=>2],
            ['name'=>'room 9','price'=>80, 'capacity'=>2],
            ['name'=>'room 10','price'=>70, 'capacity'=>2],
            ['name'=>'room 10','price'=>1000, 'capacity'=>8],
            ];
        return view('pages/reservations')->with('data',$data);
    }

    public function preSelected($id){
        return 'make a reservation for ' . $id;
    }

    public  function calendar(){
        
    }
}

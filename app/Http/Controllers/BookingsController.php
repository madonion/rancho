<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //


        $current = Carbon::now();

        $requestDate = Carbon::parse($request->date);

        //dd($requestDate);

        if($requestDate->lt($current) && ($requestDate->DiffInHours($current)>24))  return response()->json([
            'message' => 'No time machine available at this time, sorry!',
        ], 400);

        $calendars = DB::table('calendars')
            ->where([['year',$requestDate->year],['type','availability']])
            ->whereNotIn('item',[0,63])
            ->get();

        //dd($calendars);

        $requestDate->day(1);

        //dd($requestDate);
        function getCalendarData($month,$calendars){
            $current = Carbon::now();
            $exclude = 0;
            $r['daysInMonth']= $month->daysInMonth;
            $r['firstDayOfWeek'] = $month->dayOfWeek;
            $dayOfYear = $month->dayOfYear;
            $r['avails_arr'] = [];
            $r['total_avails']=[];
            foreach ($calendars as $calendar){
                $avails_of_year_arr = explode(',',$calendar->value);
                $avails_of_month_arr = array_slice($avails_of_year_arr,$dayOfYear,$r['daysInMonth']);
                if($dayOfYear < $current->dayOfYear)
                    {$exclude = $current->dayOfYear - $dayOfYear;//dd($exclude);
                        };
                $r['avails_arr'][] = ['room_id'=>$calendar->item,'avails'=>$avails_of_month_arr];
                foreach ($avails_of_month_arr as $day => $available ){
                    if ($day > $exclude) {
                        if (array_key_exists($day, $r['total_avails'])) {
                            $r['total_avails'][$day] = $r['total_avails'][$day] + $available;
                        } else {
                            $r['total_avails'][$day] = $available;
                        }
                    } else{
                        $r['total_avails'][$day] =0;
                    }
                }
                
                
            }
            return $r;
        }
        $c =[];
        $c[] = getCalendarData($requestDate,$calendars);
        $requestDate->addMonth();
        $c[] = getCalendarData($requestDate,$calendars);
        return $c;







    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

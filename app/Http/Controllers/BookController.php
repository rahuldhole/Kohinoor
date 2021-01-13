<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bookings');
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
        $user = auth()->user();
        $userid = $user->id;
        try{
            DB::table('reservation')->insert([
                'user_id' => $userid,
                'console_id' => $request->console,
                'chairs' => $request->chairs,
                'start_time' => $request->starttime,
                'end_time' => $request->endtime,
                'on_date' => $request->date,
                'user_notes' => $request->spreq,
                'admin_notes' => '',
                'bill' => '0',
                'created_at' => now(),
                'status' => '1'
            ]);
            //status 2- Confirmed 1-Waiting Confirmation, 0 Cancelled
        } catch (\Illuminate\Database\QueryException $ex){
            session()->flash('bookmsg', $ex->getMessage());
            return view('dashboard');
        }

        session()->flash('bookmsg', 'Your booking request has been made plaease wait for our confirmation. Thank you!');
        return view('bookings');
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
    public static function showmy()
    {
        $user = auth()->user();
        $userid = $user->id;
        $bookings = DB::table('reservation')
            ->whereRaw('user_id='.$userid)
            ->orderBy('created_at', 'desc')
            ->get();
        return  $bookings;
    }

    public static function showNew()
    {
        $bookings = DB::table('reservation')
            ->select('users.name as name', 'on_date', 'start_time', 'end_time', 'profile_photo_path')
            ->join('users', 'users.id', '=', 'reservation.user_id')
            ->join('consoles', 'consoles.id', '=', 'reservation.console_id')
            ->orderBy('reservation.created_at', 'desc')
            ->limit(6)
            ->get();
        return  $bookings;
    }
    public static function showAll()
    {
        $bookings = DB::table('reservation')
            ->select('reservation.id as id', 'users.name as name', 'on_date', 'start_time', 'end_time', 'profile_photo_path', 'chairs', 'user_notes', 'status', 'admin_notes')
            ->join('users', 'users.id', '=', 'reservation.user_id')
            ->join('consoles', 'consoles.id', '=', 'reservation.console_id')
            ->orderBy('reservation.on_date', 'desc')
            ->get();
        return  $bookings;
    }
    public static function showConsoles()
    {
        $consoles = DB::table('consoles')
            ->orderBy('qty', 'desc')
            ->get();
        return  $consoles;
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reserves = Reservation::get();
        return view('Admin.Reservation.index',compact('reserves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reserve = new Reservation();
        $reserve->name = $request->name;
        $reserve->email = $request->email;
        $reserve->phone = $request->phone;
        $reserve->gust_number = $request->gust_number;
        $reserve->date = $request->date;
        $reserve->time = $request->time;
        $reserve->message = $request->message;
        $reserve->save();
        return back()->with('success','Your Reservation Saved successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

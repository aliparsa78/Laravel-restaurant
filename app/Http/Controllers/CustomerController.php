<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = User::where('user_type','!=','1')->get();
        return view('Admin.Customer.index',compact('customers'));
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
        //
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

    public function block()
    {
        $user_id = Auth::user()->id;
        return view('Block.index',compact('user_id'));
    }

    public function blockCustomer(Request $request)
    {
        $customer_id =  $request->customer_id;
        $customer = User::find($customer_id)->first();
        $customer->user_type = '3';
        $customer->update();
        return back();
    }

    public function unblock(Request $request)
    {
        $customer_id =  $request->customer_id;
        $customer = User::find($customer_id)->first();
        $customer->user_type = '0';
        $customer->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

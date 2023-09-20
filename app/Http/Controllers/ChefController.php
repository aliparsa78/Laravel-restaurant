<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;
use File;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefs = Chef::get();
        return view('Admin.Chef.index',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Chef.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chef = new Chef();
        $chef->name = $request->name;
        $chef->lastname = $request->lastname;
        $chef->email = $request->email;
        $chef->address = $request->address;
        $chef->phone = $request->phone;
        $chef->role = $request->role;
        $chef->salary = $request->salary;
        $chef->start_protocol = $request->start_protocol;
        $chef->end_protocol = $request->end_protocol;
        if($request->hasFile('profile')){
            $image = $request->profile;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->profile->move('Admin/Images/Chef/',$imagename);
            $chef->profile = $imagename;
        }else{
            return back()->with('danger','Image not selected');
        }
        $chef->save();
        return redirect('/chef')->with('success','Chef added succesfuly !');

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
        $chef = Chef::find($id);
        return view('Admin/Chef/edit',compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $chef = Chef::find($id);
        $chef->name = $request->name;
        $chef->lastname = $request->lastname;
        $chef->email = $request->email;
        $chef->address = $request->address;
        $chef->phone = $request->phone;
        $chef->role = $request->role;
        $chef->salary = $request->salary;
        $chef->start_protocol = $request->start_protocol;
        $chef->end_protocol = $request->end_protocol;
        if($request->hasFile('profile')){
            $image = $request->profile;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->profile->move('Admin/Images/Chef/',$imagename);
            $chef->profile = $imagename;
        }
        $chef->update();
        return redirect('/chef')->with('success','Chef Updated succesfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $chef = Chef::find($id)->first();
        $profile_path = "Admin/Images/Chef/".$chef->profile;
        if(File::exists($profile_path)){
            File::delete($profile_path);
        }
        $chef->delete();
        return back()->with('success','Chef deleted successfuly');
    }
}

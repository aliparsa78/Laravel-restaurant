<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foods;
use File;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Foods::get();
        return view('Admin.Foods.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Foods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food = new Foods();
        $food->name = $request->name;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->status = $request->status;
        if($request->hasFile('image')){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Admin/Images/Foods/',$imagename);
            $food->image = $imagename;
        }else{
            return back()->with('danger','Image not selected');
        }
        $food->save();
        return redirect('/food')->with('success','Food added successfuly !');
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
        $food = Foods::find($id);
        return view('Admin.Foods.edit',compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $food = Foods::find($id);
        $food->name = $request->name;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->status = $request->status;
        $food->for = $request->for;
        if($request->hasFile('image')){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Admin/Images/Foods/',$imagename);
            $food->image = $imagename;
        }
        $food->update();
        return redirect('/food')->with('success','Food updated successfuly !');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Foods::find($id);
        $image_path = public_path('Admin/Images/Foods/'.$food->image);
        if(File::exists($image_path)){
            File::delete($image_path);
        }
        $food->delete();
        return back()->with('success','Food deleted successfuly !');
    }
}

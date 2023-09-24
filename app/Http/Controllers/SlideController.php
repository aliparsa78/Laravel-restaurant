<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use File;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('Admin.Slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slid = new Slider();
        $slid->name = $request->name;
        $slid->information = $request->information;
        $slid->status = $request->status;

        if($request->hasFile('image')){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Admin/Images/Slider',$imagename);
            $slid->image = $imagename;
        }
        $slid->save();
        return redirect('/slider')->with('success','Slider added successfuly !');
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
        $slider = Slider::find($id);
        return view('Admin.Slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slid = Slider::find($id);
        $slid->name = $request->name;
        $slid->information = $request->information;
        $slid->status = $request->status;

        if($request->hasFile('image')){
            $image = $request->image;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('Admin/Images/Slider',$imagename);
            $slid->image = $imagename;
        }
        $slid->update();
        return redirect('/slider')->with('success','Slider updated successfuly !');
    }

    public function deactive(Request $request)
    {
        $id = $request->id;
        $slider = Slider::where('id',$id)->first();
        $slider->status = 0;
        $slider->update();
        return back()->with('success','Slider blocked !');
    }
    public function active(Request $request)
    {
        $id = $request->id;
        $slider = Slider::where('id',$id)->first();
        $slider->status = 1;
        $slider->update();
        return back()->with('success','Slider un blocked !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slide = Slider::find($id);
        $image_path = "Admin/Images/Slider/".$slide->image;
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $slide->delete();
        return back()->with('success','Slider Deleted Successfuly !');
    }
}

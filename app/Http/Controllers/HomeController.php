<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Foods;
use App\Models\Chef;
use Auth;
class HomeController extends Controller
{
    function index()
    {
        $slider = Slider::where('status','1')->get();
        $foods = Foods::where('status','1')->get();
        $chefs = Chef::get();
        $meals = Foods::where('status','0')->get(); // for meals 
        return view('Home.index',compact('slider','foods','chefs','meals'));
        
    }

    function redirect(){
        $usertype =Auth::user()->user_type;
        if($usertype ==='1')
        {
            return view('Admin.index');
        }else if($usertype === '0'){

            return view('Home.index');
        }else{
            $user_id = Auth::user()->id;
            return view('Block.index',compact('user_id'));
        }
        
        
    }
}

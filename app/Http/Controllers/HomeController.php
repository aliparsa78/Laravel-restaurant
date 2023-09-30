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
        $subsliders = Foods::where('status','1')->get();// For slider
        $chefs = Chef::get();
        $brackfast = Foods::where('status','0')->where('for','b')->get(); // for meals brackfast 
        $lunches = Foods::where('status','0')->where('for','l')->get(); // for meals lunch 
        $dinner = Foods::where('status','0')->where('for','d')->get(); // for meals dinner 
        return view('Home.index',compact('slider','subsliders','chefs','lunches','brackfast','dinner'));
        
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

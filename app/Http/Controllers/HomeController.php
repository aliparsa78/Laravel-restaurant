<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    function index()
    {
        return view('Home.index');
        
    }

    function redirect(){
        $usertype =Auth::user()->user_type;
        if($usertype ==='1')
        {
            return view('Admin.index');
        }else if($usertype === '0'){

            return view('Home.index');
        }else{
            return view('Block.index');
        }
        
        
    }
}

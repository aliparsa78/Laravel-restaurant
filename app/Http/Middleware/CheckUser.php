<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      if(Auth::check()){
        if(Auth::user()->user_type == 1){
          return $next($request);

        }elseif(Auth::user()->user_type == 0){
          return $next($request);

        }elseif(Auth::user()->user_type == 3){
          return $next($request);

        }
      }else{
        return redirect('/login');
      }
        
    }
}

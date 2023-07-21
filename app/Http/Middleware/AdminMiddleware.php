<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post; 

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){

             if(Auth::user()->role == 1){

                return $next($request);

             } else{

                return redirect()->route('error');

             }

        } else{

            return redirect('error');

        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // echo "this is the global midleware";
        // if($request->age && $request->age<18){
        //     return redirect('noaccess');
         
        // }
        //this is group midleware tutorial
        // if($request->age && $request->age<18){
        //     return redirect('noaccess');
        // }
        if($request->age && $request->age<16){
            return redirect('noaccess');
        }
        return $next($request);
    }
}

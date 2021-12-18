<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserRoutes
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
       
        if($request->user()->role == 'admin'){
            return redirect()->route('dashboard');
        }

        // if(!$request->user()->status){

        //     Auth::guard('web')->logout();


        //     $request->session()->flash('message', 'Only active accounts can access dashboard');
        //     return redirect()->route('login')->with( ['message' => 'Only active accounts can access dashboard'] );

        // }

        
        return $next($request);
    }
}

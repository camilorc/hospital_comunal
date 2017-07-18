<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //comprobamos que sea de tipo administrador = 1
        if(Auth::user()->profile == 1){
            return $next($request);
        }else{
            return redirect('/accesodenegado');
            
        }


        
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class DirectorMiddleware
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
        //comprobamos que sea de tipo director = 2
        if(Auth::user()->profile == 2){
            return $next($request);
        }else{
            return redirect('/accesodenegado');
            
        }
    }
}

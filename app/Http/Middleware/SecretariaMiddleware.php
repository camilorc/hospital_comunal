<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SecretariaMiddleware
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
        //comprobamos que sea de tipo secretaria = 3
        if(Auth::user()->profile == 3){
            return $next($request);
        }else{
            return redirect('/accesodenegado');
            
        }
    }
}

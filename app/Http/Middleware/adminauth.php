<?php

namespace App\Http\Middleware;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class adminauth
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
        // return $next($request);

        if(Auth::user()->role->id== 1)
        {
            return $next($request);
        }
        else{
            return redirect('/');
        }
    }
}

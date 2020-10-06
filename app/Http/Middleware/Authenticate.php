<?php

namespace App\Http\Middleware;

use App\Models\User;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');// yahan pe jo bhi route deinge to agar user logged in nahi ho ga to wo ussi page pe redirect kadega.. lekn jo auth  folder k andar views hain unhi pe return karega
        }
    }

    
}

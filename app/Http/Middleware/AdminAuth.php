<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::check() || Auth::user()->is_admin !== 1 )
            return redirect('/admin/login');
        else
            return $next($request);
    }

}

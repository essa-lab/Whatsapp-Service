<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware {

    public function handle($request, Closure $next)
    {
        if (!Auth::check())
                return redirect(route('error'));
           
            if(!Auth::user()->is_admin)
                return redirect(route('error'));



        return $next($request);
    }

}
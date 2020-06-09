<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Admin\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        $user = Auth::user();
        if ($user->role == Role::ADMIN){
            return $next($request);
        }
        return abort(403);
    }
}

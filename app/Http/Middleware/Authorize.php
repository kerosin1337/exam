<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Authorize
{
    public function handle($request, Closure $next, $ability)
    {
        if (Auth::check() && Auth::user()->roles == $ability) {
            return $next($request);
        }
        abort(403);
    }

}

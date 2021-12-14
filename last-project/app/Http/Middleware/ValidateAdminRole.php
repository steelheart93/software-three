<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateAdminRole
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
        if (auth()->user()->role == "admin") {
            return $next($request);
        }
        // return route('login');
        return abort(403, 'Acción no autorizada, si el problema persiste por favor comuníquese con soporte.');
    }
}

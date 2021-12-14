<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateEmployeeRole
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
        if (auth()->user()->role == "employee") {
            return $next($request);
        }
        return abort(403, 'Acción no autorizada, si el problema persiste por favor comuníquese con soporte.');
    }
}

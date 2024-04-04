<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;

use Closure;

class SetLanguage
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
        \App::setLocale($request->language);
        return $next($request);
    }
}

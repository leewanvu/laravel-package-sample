<?php

namespace Leewanvu\LaravelPackageSample\Http\Middleware;

use Closure;

class JustTest
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
        if ($request->is('test') && $request->has('is_middleware') && $request->get('is_middleware')) {
            return "[JustTest Middleware]: You're accessing test page.";
        }

        return $next($request);
    }
}

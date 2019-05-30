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
        if ($request->is('test')) {
            return redirect('home');
        }

        return $next($request);
    }
}

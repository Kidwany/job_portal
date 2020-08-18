<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
//use Illuminate\Support\Facades\Auth;

class LastCompanyActivity
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
        if (Auth::guard('company')->check())
        {
            $expiresAt = Carbon::now()->addMinutes(1);
            Cache::put('company-is-online-' . Auth::guard('company')->user()->id, true, $expiresAt);
        }
        return $next($request);
    }
}

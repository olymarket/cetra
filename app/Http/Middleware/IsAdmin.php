<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //$blockAccess = true;

        //if (Auth::user() && Auth::user()->idRole == 1) $blockAccess = false;

        //if ($blockAccess) {
        //    return back()->with('error',  'No eres administrador no tienes privilegios para acceder');}

        //return $next($request);

        if (! Auth::check()) {
            return redirect()->route('public.home.index');
        }
        elseif (Auth::user()->idRole == '1') {
            return $next($request);}
        else{
            return redirect()->route('public.login.index');
        }
    }
}

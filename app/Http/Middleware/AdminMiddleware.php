<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if ($request->user()->role_id === 1) {
          return $next($request);
        }
        $user = Auth::user();
        $user->load('applicant');
        return redirect('/applicant/'.$user->applicant->id);
    }
}

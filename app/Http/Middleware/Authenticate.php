<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
//    protected function redirectTo($request)
//    {
//        if (! $request->expectsJson()) {
//            return route('connexionUser');
//        }
//    }


//    public function handle($request, Closure $next)
//    {
//        if (auth()->guest()) {
//            return redirect('/connexionUser')->withErrors([
//                'email' => "Vous n'avez pas acces a cette page sans etre connecté",
//
//            ]);
//        }
//    }
}

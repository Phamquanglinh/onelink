<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Element;
class AdminRole
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
        if(Auth::check()) {
            $role = Auth::user()->role;
            var_dump($role);
            if($role == 0){
                return $next($request);
            }else{
                return redirect('home');
            }
        }else{
            return redirect('welcome');
        }
    }
}

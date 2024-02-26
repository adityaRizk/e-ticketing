<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        $user = Auth::user();
        if(Auth::check()){

            if ($user->role == $roles) {
                return $next($request);
            }


            if(Auth::user()->role == 'admin'){
                return redirect()->intended('/admin');

            }elseif(Auth::user()->role == 'petugas'){
                return redirect()->intended('/petugas');

            }elseif(Auth::user()->role == 'penumpang'){
                return redirect()->intended('/penumpang');

            }
        }else{
            return redirect('login');
        }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// BASE DE DATOS
use App\Models\HecUsuario;

class CheckUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('user')) {
            return redirect('/')->withErrors(['login' => 'Debe iniciar sesión para acceder a esta página.']);
        }
        elseif (session()->has('user')) {
            // echo session('user')['tok'];
            $toke = HecUsuario::where('usua_tok',session('user')['tok'])->get();
            // echo '<br />';
            // echo count($toke);
            // dd($toke);
            // echo session('user')['tok'];
            if(count($toke) <= 0){
                session()->forget('user');
                return redirect('/')->withErrors(['login' => 'Debe iniciar sesión para acceder a esta página.']);
            }
            return $next($request);
        }

        return $next($request);

    }

}

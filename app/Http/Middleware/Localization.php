<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Closure;

class Localization
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
		// verifica se existe sessao
		if (Session::has('locale')) {
			// seta o novo idioma
			App::setLocale(Session::get('locale'));
		}

        return $next($request);
    }
}

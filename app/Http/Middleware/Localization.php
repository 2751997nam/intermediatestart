<?php

namespace App\Http\Middleware;

use Closure;
use Lang;
use Session;

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
        if(!Session::has('locale')) // kiểm tra session đã được set locale chưa
        {
            Session::put('locale', config('app.locale')); //set locale mặc định
        }
        Lang::setLocale(Session::get('locale'));
        app()->setLocale(Session::get('locale'));

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class NameDayCookie{


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next){
        $res = json_decode(file_get_contents("https://svatky.adresa.info/json"));
        $name = $res[0]->name;
        $date = date("d.m.Y");
        if (!Cookie::has('nameday_cookie')){
            $nameday_name = [$name, $date];
            $serialized = json_encode($nameday_name);
            $nameday_cookie = Cookie::make(
                'nameday_cookie',
                "$serialized"
            );
            $nameday_cookie = $nameday_cookie->withExpires(Carbon::tomorrow());

            $response = $next($request);

            return $response->withCookie($nameday_cookie);
        }

        return $next($request);
    }
}

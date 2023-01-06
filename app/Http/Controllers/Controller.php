<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Couchbase\KeyDeletedException;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function MongoDB\BSON\toJSON;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    public function setCookie(){
        if (!Cookie::has('nameday_cookie')){
            $nameday_name = $this->Svatek();
            $serialized = json_encode($nameday_name);
            $nameday_cookie = Cookie::make(
                'nameday_cookie',
                "$serialized"
            );
            $nameday_cookie = $nameday_cookie->withExpires(Carbon::tomorrow());

            return [$nameday_cookie, $nameday_name[1]];
        }
        $cookie_value = Cookie::get('nameday_cookie');
        return $cookie_value;
    }

*/
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function MongoDB\BSON\toJSON;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function Svatek(){
        $res = json_decode(file_get_contents("https://svatky.adresa.info/json"));
        $name = $res[0]->name;
        $date = date('l, d. M');
        $day = $this->datumCesky($date);
        return [$name, $day];
    }


    function datumCesky(string $date): string{

        $men = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May',
            'Jun', 'Jul', 'Aug', 'Sep', 'Oct',
            'Nov', 'Dec'
        ];

        $mcz = [
            'ledna', 'února', 'března', 'dubna', 'května',
            'června', 'července', 'srpna', 'září', 'října',
            'listopadu', 'prosince'
        ];

        $date = str_replace($men, $mcz, $date);

        $den = [
            'Monday', 'Tuesday', 'Wednesday', 'Thursday',
            'Friday', 'Saturday', 'Sunday'
        ];

        $dcz = [
            'Pondělí', 'Úterý', 'Středa', 'Čtvrtek',
            'Pátek', 'Sobota', 'Neděle'
        ];

        return str_replace($den, $dcz, $date);
    }


}

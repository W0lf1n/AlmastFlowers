<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(): Application|Factory|View{
        $res = json_decode(file_get_contents("https://svatky.adresa.info/json"));
        $name = $res[0]->name;
        $date = date('l, d. M');
        $day = $this->datumCesky($date);

        return view('homepage.index', ['day' => $day, 'name' => $name]);
    }

    function datumCesky(string $date): string
    {
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

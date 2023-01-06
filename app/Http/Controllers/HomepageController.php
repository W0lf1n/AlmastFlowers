<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomepageController extends Controller
{
    public function index(): Application|Factory|View{
        $serialized = Cookie::get('nameday_cookie');
        $values = json_decode($serialized, true);
        return view('homepage.index', ['day' => $values[1], 'name' => $values[0]]);
    }

}

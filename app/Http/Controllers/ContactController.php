<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ContactController extends Controller
{
    public function index(): Application|View|Factory{
        $serialized = Cookie::get('nameday_cookie');
        $values = json_decode($serialized, true);
        return \view('contact.index', ['day' => $values[1], 'name' => $values[0]]);
    }
}

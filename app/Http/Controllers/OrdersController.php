<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class OrdersController extends Controller{

    public function index(){
        $serialized = Cookie::get('nameday_cookie');
        $values = json_decode($serialized, true);
        return view('orders.index', ['day' => $values[1], 'name' => $values[0]]);
    }
}

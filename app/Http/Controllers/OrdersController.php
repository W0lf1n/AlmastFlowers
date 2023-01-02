<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller{

    public function index(){
        $req = $this->Svatek();
        return view('orders.index', ['day' => $req[1], 'name' => $req[0]]);
    }
}

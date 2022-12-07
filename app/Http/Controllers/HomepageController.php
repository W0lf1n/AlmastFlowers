<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(): Application|Factory|View{
        $req = $this->Svatek();
        return view('homepage.index', ['day' => $req[1], 'name' => $req[0]]);
    }

}

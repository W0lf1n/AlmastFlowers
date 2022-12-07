<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(): Application|Factory|View{
        $req = $this->Svatek();
        return \view('about_us.index', ['day' => $req[1], 'name' => $req[0]]);
    }
}

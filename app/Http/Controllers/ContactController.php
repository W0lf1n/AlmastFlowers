<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(): Application|View|Factory{
        $req = $this->Svatek();
        return \view('contact.index', ['day' => $req[1], 'name' => $req[0]]);
    }
}

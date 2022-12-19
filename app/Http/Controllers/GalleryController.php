<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(): Application|View|Factory{
        $req = $this->Svatek();
        $path = 'public/assets/img/gallery';
        $images = Storage::files($path);
        dd($images);
        return \view('gallery.index', ['day' => $req[1], 'name' => $req[0]]);
    }
}

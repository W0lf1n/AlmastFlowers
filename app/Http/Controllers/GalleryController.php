<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Console\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cookie;

class GalleryController extends Controller
{
    /**
     * @return Application|View|Factory
     */
    public function index(): Application|View|Factory{
        $serialized = Cookie::get('nameday_cookie');
        $values = json_decode($serialized, true);

        $file_name_list = array();
        $images_name = File::files('assets/img/gallery');


        /*
         * Pro budoucí já
         *      při definování kategorii si vytvoř různé složky, které ty kategorie budou reprezentovat
         *      pak už budeš jenom zobrazovat fotky, které mají "path" s koncovkou té složky
         *          (ukázka jak vypadá "path" => assets/img/gallery)
         */


        foreach ($images_name as $img){
            $file_name_list[] = $img->getFilename();
        }
        $page = request('page', 1);
        $images = collect($file_name_list)->forPage($page, 24);
        $total_images = ceil(count($file_name_list) / 5 / 24);
        return \view('gallery.index',
            ['day' => $values[1],
                'name' => $values[0],
                'images' => $images,
                'total_images' => $total_images,
                'page' => $page,
                'file_images' => $file_name_list]);
    }
}

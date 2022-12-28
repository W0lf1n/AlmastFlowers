<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller{

    public function index(){
        return view('mail.order');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function send(){
        $recv_mail = "petr.bohac61@gmail.com";
        Mail::to($recv_mail)->send(new OrderMail);
        return view('contact.index');
    }
}

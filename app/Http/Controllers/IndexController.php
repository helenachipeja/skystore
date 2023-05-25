<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index',[
        ]);
    }


    public function shop(){
        return view('shop',[
        ]);
    }

    public function cart(){
        return view('cart',[
        ]);
    }

    public function checkout(){
        return view('checkout',[
        ]);
    }


    public function detail(){
        return view('detail',[
        ]);
    }


    public function contact(){
        return view('contact',[
        ]);
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\comic;

class PageController extends Controller
{
    public function index() {

        $comics = comic::all();
        $dati = [
            'store'=> config("data"),
            "comics"=> $comics,  
        ];
        return view('home', $dati);
    }

    public function about() {

        $comics = comic::all();
        $dati = [
            'store'=> config("data"),
            "comics"=> $comics,  
        ];
        return view('about', $dati);
    }


}

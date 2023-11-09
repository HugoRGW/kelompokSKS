<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskulControlller extends Controller
{
    public function basket(){
        return view('ekskul.basket.index');
    }

    public function bdi(){
        return view('ekskul.bdi.index');
    }

    public function bahasajepang(){
        return view('ekskul.bahasajepang.index');
    }

    public function pramuka(){
        return view('ekskul.pramuka.index');
    }

    public function webdesign(){
        return view('ekskul.webdesign.index');
    }

    public function voli(){
        return view('ekskul.voli.index');
    }

    public function band(){
        return view('ekskul.band.index');
    }

    public function pecintaalam(){
        return view('ekskul.pecintaalam.index');
    }

    public function robotik(){
        return view('ekskul.robotik.index');
    }
}

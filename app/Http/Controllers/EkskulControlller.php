<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkskulControlller extends Controller
{
    public function basket(){
        return view('ekskul.basket.index');
    }
}

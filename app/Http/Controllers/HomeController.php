<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Info;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('User/home');
    }

    public function artikel()
    {
        return view('User/artikel');
    }

    public function tentang()
    {
        return view('User/tentang');
    }

    public function about()
    {
        return view('User/about');
    }

    public function contact()
    {
        $info = Info::all();

        return view('User/contact', compact('info'));
    }
}

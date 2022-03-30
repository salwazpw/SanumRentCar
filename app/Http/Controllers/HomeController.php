<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function home()
    {
        return view('web.index', ['title'=>'Sanum - Home']);
    }

    public function mobil()
    {
        return view('web.mobil', ['title'=>'Sanum - Mobil']);
    }

    public function form()
    {
        return view('web.form', ['title'=>'Sanum - Form Rent']);
    }

    public function contact()
    {
        return view('web.contact', ['title'=>'Sanum - Contact']);
    }
}

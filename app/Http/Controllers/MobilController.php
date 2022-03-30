<?php

namespace App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $data = Mobil::paginate(5);
        return view('web.mobil', ['mobil'=> $data], ['title'=>'Mobil']);
    }
}

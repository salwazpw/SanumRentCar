<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;

class SaranController extends Controller
{
    public function create()
    {
        return view('web.contact', ['title'=>'Sanum - Contact']);
    }

    public function store()
    {
        Saran::create([
            'nama' => request('nama'),
            'email' => request('email'),
            'subjek' => request('subjek'),
            'pesan' => request('pesan'),
        ]);
        
        return redirect()->back();
    }
}

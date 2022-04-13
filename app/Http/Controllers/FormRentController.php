<?php

namespace App\Http\Controllers;

use App\Models\FormRent;
use Illuminate\Http\Request;

class FormRentController extends Controller
{
    public function create(){
        return view ('web.create', ['title'=>'Sanum - Form Rent']);
    }
    public function store()
    {
        FormRent::create([
            'NIK' => request('NIK'),
            'nama' => request('nama'),
            'email' => request('email'),
            'jenisMobil' => request('jenisMobil'),
            'alamat' => request('alamat'),
            'sopir' => request('sopir'),
            'jasa' => request('jasa')
        ]);
 
        return redirect()->back();
    }

    public function add_profil(Request $request)
    {

            $profil = new FormRent();


        if($request['radio'] == 'sopir'){

            $profil->sopir = "Ya";  
            // $profil->Jasa = 0;  

        } 
        elseif ($request['radio'] == 'jasa')   {

            $profil->Jasa = "Ya";  
            // $profil->adminitrator = 0; 
        } 
        $profil->save();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function daftar(){
        return view ('daftar');
    }

    public function kirim(Request $request)
    {
        $nama = $request->input ('nama');
        $address = $request-input('alamat');

        return view('dashboard', ['name'=> $name, 'address'=>$address]);
    }
}

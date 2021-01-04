<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistrasiRequet;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view("registrasi.form");
    }

    public function proses(RegistrasiRequet $request)
    {

        print_r($request->except("_token"));

        $filename = time() . "-" . $request->file("foto")->getClientOriginalName();
        $request->file("foto")->move(public_path(), $filename);

        $surat = time() . "." . $request->file("surat")->getClientOriginalExtension();
        $request->file("foto")->move(public_path(), $surat);

        echo "Data diproses";
    }
}

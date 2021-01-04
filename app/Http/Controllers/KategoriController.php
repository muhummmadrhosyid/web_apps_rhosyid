<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Http\Requests\KategoriRequest;

class KategoriController extends Controller
{
    public function index()
    {
        $data_kategori = Kategori::all();

        $data = [
            'data_kategori' => $data_kategori
        ];

        return view("kategori.index", $data);
    }

    public function tambah()
    {
        return view("kategori.form");
    }

    public function simpan(KategoriRequest  $request)
    {
        $kategori = new Kategori();
        $kategori->nama = $request->get('nama');
        $kategori->deskripsi = $request->get('deskripsi');
        $kategori->created_at = new \DateTime();
        $kategori->updated_at = new \DateTime();
        $kategori->save();

        return redirect(route("kategori_index"))->with('status', 'Data berhasil ditambah!');
    }
}

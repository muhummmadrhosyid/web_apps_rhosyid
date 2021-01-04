<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{

    public function index()
    {
        return view('tema.master');
    }
}

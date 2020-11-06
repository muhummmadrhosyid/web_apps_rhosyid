<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function test1()
    {
        return view("view-1");
    }

    public function index()
    {
        return view("home");
    }
}

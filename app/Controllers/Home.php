<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout');
    }
    public function dasboard()
    {
        return view('dasboard');
    }
    public function user()
    {
        return view('user');
    }
    public function menu()
    {
        return view('menu');
    }
    public function pesan()
    {
        return view('pesan');
    }
}

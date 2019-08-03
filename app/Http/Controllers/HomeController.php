<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('twitter_clone.home');
    }

    public function show()
    {
        return view('welcome');
    }
}

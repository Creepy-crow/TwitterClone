<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

class HomeController extends Controller
{
    public function __construct() {
=======
//delete request
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //delete annotations
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }
<<<<<<< HEAD

    public function home() {
        return view('twitter_clone.home');
    }

=======
    //change parentheses
>>>>>>> 98d12893a5a7aca4e3c8d1e312efcb06b21be2c5
    public function show() {
        return view('welcome');
    }
}

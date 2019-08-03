<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //fix position of {
    public function __construct() {
        $this->middleware('auth');
    }
    //fix position of {
    public function index() {
        return view('home');
    }
    //fix position of {
    public function home() {
        return view('twitter_clone.home');
    }
    //fix position of {
    public function show() {
        return view('welcome');
    }
}

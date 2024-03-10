<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    // this middleware ensures the user can not access the site without being authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }
}

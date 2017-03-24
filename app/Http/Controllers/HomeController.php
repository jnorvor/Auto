<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      return view('home.index');
    }

    /**
     * @return string
     */
    public function contact()
    {
        return view('menu.contact');
    }
}

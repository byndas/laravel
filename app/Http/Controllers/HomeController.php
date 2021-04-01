<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// controllers can replace closures in routing files
class HomeController extends Controller
{
    public function home()
    {
        return ('home.index');
    }

    public function contact()
    {
        return ('home.contact');
    }
}

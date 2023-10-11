<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //function to return views
    function dashboard()
    {
     return view('dashboard');
    }

    function page2()
    {
        return view('page2');
    }

    function page3()
    {
        return view('page3');
    }
}

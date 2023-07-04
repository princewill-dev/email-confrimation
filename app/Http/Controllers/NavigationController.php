<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home_link_function()
    {
        return view('outer.home');
    }
}

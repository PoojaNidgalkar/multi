<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontpageController extends Controller
{
    public function home()
    {
        return view('front_page.front_page');
    }
}

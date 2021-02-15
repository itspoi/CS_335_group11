<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function getHome() {
        return view('welcome');
    }

    public function getDestination()
    {
        return view('destination');
    }

}

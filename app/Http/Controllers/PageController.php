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

    public function getPackages()
    {
        return view('packages');
    }

    public function getSpecialOffers()
    {
        return view('special offers');
    }

    public function getBlog()
    {
        return view('blog');
    }

    public function getSubscription()
    {
        return view('subscription');
    }

    public function getBookNow()
    {
        return view('book now');
    }

}

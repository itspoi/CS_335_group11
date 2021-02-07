<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the user application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminIndex()
    {
        return view('admin.home');
    }

    /**
     * Show the user application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function trsIndex()
    {
        return view('trs.home');
    }
}

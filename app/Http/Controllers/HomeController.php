<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Payment;
use Auth;


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
        $users_count = User::all()->count();
        $packages_count = Package::all()->count();
        $bookings_count = Booking::all()->count();
        $payments_count = Payment::all()->sum('amount');

        $bookings = Booking::all()->take(5);

        $booking_users = array();
        $booking_packages = array();

        foreach ($bookings as $key => $booking) {
            array_push($booking_users, $booking->user()->first()->name);
            array_push($booking_packages, $booking->package()->first()->title);
        }
        
        return view('admin.home', compact('users_count','packages_count','bookings_count','payments_count','bookings','booking_users','booking_packages'));
    }

    /**
     * Show the user application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function trsIndex()
    {
        $bookings_count = Auth::user()->bookings()->count();
        $payments_count = Auth::user()->payments()->sum('amount');

        $bookings = Auth::user()->bookings()->get()->take(5);

        $booking_packages = array();

        foreach ($bookings as $key => $booking) {
            array_push($booking_packages, $booking->package()->first()->title);
        }

        return view('trs.home', compact('bookings','bookings_count','payments_count','booking_packages'));
    }
}

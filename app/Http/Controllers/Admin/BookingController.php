<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Booking;
use App\Models\Package;
use App\Models\User;
use Auth;
Use Hash;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        $booking_users = array();
        $booking_packages = array();

        foreach ($bookings as $key => $booking) {
            array_push($booking_users, $booking->user()->first()->name);
            array_push($booking_packages, $booking->package()->first()->title);
        }

        return view('admin.bookings.index', compact('bookings','booking_users','booking_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();
        $users = User::all();

        return view('admin.bookings.create', compact('packages','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
            'travellers_no' => 'required',
            'amount' => 'required',
            'from_at' => 'required',
            'to_at' => 'required',
            'packageid' => 'required',
          ]);
  
          $booking = Booking::create([
            'travellers_no' => $request['travellers_no'],
            'amount' => $request['amount'],
            'from_at' => $request['from_at'],
            'to_at' => $request['to_at'],
            'status' => "pending",
            'user_id' => $request['userid'],
            'package_id' => $request['packageid'],
          ]);

          return $this->index()->with('success','Booking added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

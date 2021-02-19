<?php

namespace App\Http\Controllers\Trs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Booking;
use App\Models\Package;
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

        return view('trs.bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::all();

        return view('trs.bookings.create', compact('packages'));
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
            'package_id' => 'required',
          ]);
  
          $booking = Booking::create([
            'travellers_no' => $request['travellers_no'],
            'amount' => $request['amount'],
            'from_at' => $request['from_at'],
            'to_at' => $request['to_at'],
            'status' => "pending",
            'user_id' => Auth::user()->id,
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


    public function amountTotal(Request $request)
    {
        $packageid = $request->get('packageid');
        $travellers_no = $request->get('travellers_no');

        $package = Package::find($packageid);

        $total_amount = $package->amount * $travellers_no;

        return response()->json(['amount' => $total_amount]);

    }
}

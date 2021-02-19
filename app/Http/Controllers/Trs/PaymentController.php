<?php

namespace App\Http\Controllers\Trs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Payment;
use App\Models\Booking;
use App\Models\Package;
use Auth;
Use Hash;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Auth::user()->payments()->get();

        $payment_packages = array();

        foreach ($payments as $key => $payment) {
            $booking = Booking::find($payment->booking_id);
            array_push($payment_packages, $booking->package()->first()->title);
        }

        return view('trs.payments.index', compact('payments','payment_packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $booking = Booking::find(decrypt($id));

        $payment = Payment::create([
            'mode' => "online payment",
            'amount' => $booking->amount,
            'user_id' => Auth::user()->id,
            'booking_id' => $booking->id,
          ]);

        $booking->status = "paid";
        $booking->save();

        return $this->index()->with('success','Booking Paid successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function receipt($id)
    {
        $payment = Payment::find(decrypt($id));
        $booking = $payment->booking()->first();
        $package = Package::find($booking->package_id);
        $user = Auth::user();

        return view('trs.payments.receipt' , compact('payment','user','package','booking'));
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

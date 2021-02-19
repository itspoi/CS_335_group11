<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\Payment;
use App\Models\Booking;
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
        $payments = Payment::all();

        $payment_users = array();
        $payment_packages = array();

        foreach ($payments as $key => $payment) {
            array_push($payment_users, $payment->user()->first()->name);
            $booking = Booking::find($payment->booking_id);
            array_push($payment_packages, $booking->package()->first()->title);
        }

        return view('admin.payments.index', compact('payments','payment_users','payment_packages'));
    }

    public function create($id)
    {
        $booking = Booking::find(decrypt($id));

        $payment = Payment::create([
            'mode' => "online payment",
            'amount' => $booking->amount,
            'user_id' => $booking->user_id,
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
    public function show($id)
    {
        $paymentid = decrypt($id);
        $payment = Payment::find($paymentid);

        return view('admin.payments.show' , compact('payment'));
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

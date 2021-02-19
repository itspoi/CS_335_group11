<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Place;
use App\Models\Transport;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Auth;
Use Hash;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();

        $package_place = array();
        $package_transport = array();
        $package_hotel = array();

        foreach ($packages as $key => $package) {
            array_push($package_place, $package->place()->first()->name);
            array_push($package_transport, $package->transport()->first()->type);
            array_push($package_hotel, $package->hotel()->first()->type);
        }

        return view('admin.packages.index', compact('packages','package_place','package_transport','package_hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $places = Place::all();
        $transports = Transport::all();
        $hotels = Hotel::all();

        return view('admin.packages.create', compact('places','transports','hotels'));  
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
            'title' => 'required|string',
            'description' => 'required|string',
            'type' => 'required|string',
            'amount' => 'required',
            'hotelid' => 'required',
            'transportid' => 'required',
            'placeid' => 'required',
          ]);
  
          $package = Package::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'type' => $request['type'],
            'amount' => $request['amount'],
            'hotel_id' => $request['hotelid'],
            'transport_id' => $request['transportid'],
            'place_id' => $request['placeid'],
          ]);

          return $this->index()->with('success','Package added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packageid = decrypt($id);
        $package = Package::find($packageid);

        $place = $package->place()->first();
        $transport = $package->transport()->first();
        $hotel = $package->hotel()->first();

        return view('admin.packages.show' , compact('package','place','transport','hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packageid = decrypt($id);
        $package = Package::find($packageid);

        return view('admin.packages.edit' , compact('package'));
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
        $package = Package::find($id);
        $package->title = $request->title;
        $package->description = $request->description;
        $package->type =$request->type;
        $package->amount = $request->amount;
        $package->type = $request->type;
        $package->hotel = $request->hotel;
        $package->transport = $request->transport;
        $package->place = $request->place;
        $package->save();
    
        return  $this->index()->with('success',' Package Information is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package = Package::find(decrypt($id));
        $package->delete(); 
        
        return redirect()->back()->with('success','Package Deleted successfully');
    }

    public function amountTotal(Request $request)
    {
        $placeid = $request->get('placeid');
        $transportid = $request->get('transportid');
        $hotelid = $request->get('hotelid');

        $place = Place::find($placeid);
        $transport = Transport::find($transportid);
        $hotel = Hotel::find($hotelid);

        $total_amount = $place->charges + $transport->charges + $hotel->charges;

        return response()->json(['amount' => $total_amount]);

    }
}

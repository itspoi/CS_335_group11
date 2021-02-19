<?php

namespace App\Http\Controllers\Trs;

use App\Http\Controllers\Controller;
use App\Models\Package;
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

        return view('trs.packages.index', compact('packages','package_place','package_transport','package_hotel'));
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

        return view('trs.packages.show' , compact('package','place','transport','hotel'));
    }
}

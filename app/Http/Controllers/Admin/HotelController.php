<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Auth;
Use Hash;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();

        return view('admin.hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotels.create');
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
            'name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'address' => 'required',
            'type' => 'required',
            'charges' => 'required',
            'picture' => 'required',
          ]);

        if ($request->hasFile('picture')) {

        $picture = request()->file('picture');
        $pictureName = time().rand(0,9).'.'.$picture->getClientOriginalExtension();
        $destination =  storage_path('app/public/pictures');
        $picture->move($destination, $pictureName);

        $hotel = Hotel::create([
            'name' => $request['name'],
            'mobile_number' => $request['mobile_number'],
            'email' => $request['email'],
            'address' => $request['address'],
            'type' => $request['type'],
            'charges' => $request['charges'],
            'picture' => $pictureName,
          ]);

          return $this->index()->with('success','Hotel added successfully.');

        }
        return $this->index()->with('error','Please add hotel picture.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotelid = decrypt($id);
        $hotel = Hotel::find($hotelid);

        return view('admin.hotels.edit' , compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hotel=Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->mobile_number = $request->mobile_number;
        $hotel->email =$request->email;
        $hotel->address = $request->address;
        $hotel->type = $request->type;
        $hotel->charges = $request->charges;
        $hotel->save();
    
        return  $this->index()->with('success',' Hotel Information is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find(decrypt($id));
        $hotel->delete(); 
        
        return redirect()->back()->with('success','Hotel Deleted successfully');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\Crypt;
use Auth;
Use Hash;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();

        return view('admin.places.index', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.places.create');
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
            'description' => 'required|string',
            'address' => 'required',
            'charges' => 'required',
            'picture' => 'required',
          ]);

        if ($request->hasFile('picture')) {

        $picture = request()->file('picture');
        $pictureName = time().rand(0,9).'.'.$picture->getClientOriginalExtension();
        $destination =  storage_path('app/public/pictures');
        $picture->move($destination, $pictureName);
        
        $place = Place::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'address' => $request['address'],
            'charges' => $request['charges'],
            'picture' => $pictureName,
          ]);

          return $this->index()->with('success','Place added successfully.');
        }
  
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
        $placeid = decrypt($id);
        $place = Place::find($placeid);

        return view('admin.places.edit' , compact('place'));
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
        $place = Place::find($id);
        $place->name = $request->name;
        $place->description = $request->description;
        $place->address = $request->address;
        $place->charges = $request->charges;
        $place->save();
    
        return  $this->index()->with('success',' Place Information is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::find(decrypt($id));
        $place->delete(); 
        
        return redirect()->back()->with('success','Place Deleted successfully');
    }
}

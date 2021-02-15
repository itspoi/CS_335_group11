<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Auth;
Use Hash;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transports = Transport::all();

        return view('admin.transports.index', compact('transports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transports.create');
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
            'type' => 'required',
            'charges' => 'required',
            'picture' => 'required',
          ]);

        if ($request->hasFile('picture')) {

        $picture = request()->file('picture');
        $pictureName = time().rand(0,9).'.'.$picture->getClientOriginalExtension();
        $destination =  storage_path('app/public/pictures');
        $picture->move($destination, $pictureName);

            $transport = Transport::create([
                'type' => $request['type'],
                'charges' => $request['charges'],
                'picture' => $pictureName,
            ]);
            return $this->index()->with('success','Transport added successfully.');
        }

          return $this->index()->with('error','Please add a transport picture.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transportid = decrypt($id);
        $transport = Transport::find($transportid);

        return view('admin.transports.edit' , compact('transport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transport = Transport::find($id);
        $transport->type = $request->type;
        $transport->charges = $request->charges;
        $transport->save();
    
        return  $this->index()->with('success',' Transport Information is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transport  $transport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transport = Transport::find(decrypt($id));
        $transport->delete(); 
        
        return redirect()->back()->with('success','Transport Deleted successfully');
    }
}

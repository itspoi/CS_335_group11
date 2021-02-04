<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Auth;
Use Hash;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'password' => 'required|min:8|confirmed',
          ]);
  
          $user = User::create([
            'name' => $request['name'],
            'mobile_number' => $request['mobile_number'],
            'email' => $request['email'],
            'address' => $request['address'],
            'password' => Hash::make($request['password']),
          ]);

          return $this->index()->with('success','User added successfully.');
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
        $userid = decrypt($id);
        $user = User::find($userid);

        return view('admin.users.edit' , compact('user'));
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
        $user=User::find($id);
        $user->name = $request->name;
        $user->mobile_number = $request->mobile_number;
        $user->email =$request->email;
        $user->address = $request->address;
        $user->save();
    
        return  $this->index()->with('success',' User Information is updated successfully.');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find(decrypt($id));
        $user->delete(); 
        
        return redirect()->back()->with('success','User Deleted successfully');
    }
}

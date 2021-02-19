<?php

namespace App\Http\Controllers\Trs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Auth;
use Hash;
use App\Models\User;

class ProfileController extends Controller
{
    // shows User Profile
    public function userprofile()
    {
        $user = Auth::user();
        $bookings_count = Auth::user()->bookings()->count();
        $payments_count = Auth::user()->payments()->sum('amount');

        return view('trs.profiles.userprofile',compact('user','bookings_count','payments_count'));
    }

    // returns Edit User Profile Form
    public function editUserprofile($id)
    {
        $user = User::find($id);

        return view('trs.profiles.edit',compact('user')); 
    }

    // Update User Profile
    public function updateUserprofile(Request $request, $id)
    {
        $input = $request->all();

        $user = User::find($id);
        $user->update($input);

        return $this->userprofile()->with('success','User Profile Updated successfully.');
    }

    // returns Change Password Form
    public function changePassword()
    {
        $user = Auth::user();

        return view('trs.profiles.changepassword', compact('user'));
    } 

    // store new Password 
    public function storePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return $this->userprofile()->with('success','Password Changed Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auth::logout();
        
        $user = User::find($id);
        $user->delete();

        return redirect('/');
    }
}

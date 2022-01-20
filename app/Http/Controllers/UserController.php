<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile($id)
    {


        if ($id == Auth::id()) {
            $user = User::find($id);
            return view('user.profile', compact('user'));
        }
        $user = Auth::user();
        if ($user->is_admin) {
            $user = User::find($id);
            return view('user.profile', compact('user'));
        }
        return response('Not Authorized to Access this page', 402);
    }
    public function isAdmin()
    {
        return $this->is_admin === '1';
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $check=$request->isadmin;

        if($request->isadmin != null) {
            if (Auth::user()->is_admin) {
            if($check === '1') {
                User::where('id', $id)
                ->update([
                    'is_admin' => 1
                ]);
            } else
                User::where('id', $id)
                ->update([
                    'is_admin' => 0
                ]);
            return back()->with('message', 'Permissions Set!');
            }
        } else if ($request->image) {
            $request->validate([
                'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            ]);

            $img = uniqid() . '-' . $request->id . '-' . $request->image->extension();
            $request->image->move(public_path('images'), $img);

            User::where('id', $id)
            ->update([
                'image_path' => $img
            ]);
            return back()->with('message', 'Profile has been updated!');
        }
        return back()->with('message');
    }
}

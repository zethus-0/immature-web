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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function team()
    {
        return view('team');
    }
    public function terms()
    {
        return view('tandc.terms');
    }
    public function privacy()
    {
        return view('tandc.privacy');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
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


    public function about()
    {

    }
}

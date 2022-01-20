<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function team()
    {
        $developers = Developer::get();
        View::share('developers', $developers);
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

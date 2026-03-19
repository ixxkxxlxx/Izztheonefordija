<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CountdownController extends Controller
{
    public function index(): View
    {
        return view('countdown');
    }
}

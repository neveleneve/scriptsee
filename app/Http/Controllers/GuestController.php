<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        // $latestitem = ;
        return view('page_guest.dashboard');
    }
}

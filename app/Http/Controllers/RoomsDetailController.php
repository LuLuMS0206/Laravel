<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomsDetailController extends Controller
{
    public function index()
    {
        return view('roomsDetail');
    }
}

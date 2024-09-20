<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rooms;
class RoomsController extends Controller
{
    public function index()
{

    $rooms = rooms::all(); 

    return view('rooms', ['rooms' => $rooms]);
}



    public function show()
    {
        return view('roomsDetail');
    }
}

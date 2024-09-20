<?php

namespace App\Http\Controllers;
use App\Models\rooms;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
{
    // Obtener todas las habitaciones y filtrar las que tengan el mismo precio y precio de oferta
    $offers = rooms::whereColumn('price', '!=', 'offer_price')->get();
    
    return view('offers', ['offers' => $offers]);
}

}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Flight;
use App\Models\Train;
use Illuminate\Http\Request;

class FlightController extends Controller
{

    public function index()
    {
        $flights = Flight::all();
        $trains = Train::where('orario_di_partenza', '>=', now())->get();

        return view('home', compact('flights', 'trains'));
    }
}

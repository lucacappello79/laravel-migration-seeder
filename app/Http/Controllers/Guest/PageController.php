<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Flight;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_di_partenza', '>=', now())->get();
        $flights = Flight::all();
        $customers = Customer::all();
        // $trains = Train::all();

        // dd(now()->format('H:i:s'));

        return view('home', compact('trains', 'flights', 'customers'));
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use App\Models\Flight;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()

    {
        $flights = Flight::all();
        $trains = Train::where('orario_di_partenza', '>=', now())->get();
        $customers = Customer::all();

        return view('home', compact('flights', 'trains', 'customers'));
    }
}

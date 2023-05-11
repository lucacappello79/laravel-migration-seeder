<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_di_partenza', '>=', now())->get();

        return view('home', compact('trains'));
    }
}

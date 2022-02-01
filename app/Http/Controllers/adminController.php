<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\User;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function lista()
    {
        
        $vuelos = Flight::all();

        
        return view('administration/admin')->with('vuelos', $vuelos);
    }
}

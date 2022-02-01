<?php

namespace App\Http\Controllers;

use App\Models\airplane;
use App\Models\Flight;

use Illuminate\Http\Request;

class passengersController extends Controller
{
    public function vueloAsignar(Request $request) {

        
        $vuelos = Flight::all();
        $aviones = airplane::all();
       

        
        $vueloEscogido = $request->vueloDropdown;

        
        $vueloObtenido = Flight::find($vueloEscogido);

        return view('passengers/index')->with('vuelos', $vuelos)->with('vueloEscogido', $vueloEscogido)->with('vueloObtenido', $vueloObtenido)->with('aviones', $aviones);

    }
}

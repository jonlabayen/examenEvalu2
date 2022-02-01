<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Flight;
use Illuminate\Support\Facades\Auth;

class flightController extends Controller
{
    public function ListaVuelos() {

        $vuelos = Flight::all()->sortBy("date");
        $fechaAsc = Carbon::now()->format('Y-m-d');
        return view('flights/index', compact('vuelos' , 'fechaAsc'));

    }

    public function GuardarVuelo(Request $request, $id) {

        $idUser = Auth::user()->id;
        $id = $request->id;
        $reservaVuelo = Flight::findOrFail($id);
        $asientos_libres = $reservaVuelo->available_seats;
        $reservados = $request->asientos;
        $resultado = $asientos_libres - $reservados;
        $reservaVuelo->available_seats = $resultado;
        $reservaVuelo->save();

        $reservaVuelo->user()->attach($idUser);

        return redirect()->route('ListaVuelos');

    }
}

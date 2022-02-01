<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function store(Request $request)
    {

       
        $validated = $request->validate([

            'phone' => 'required|numeric|digits_between:9,15',
            'date_of_birth' => 'required|date|date_format:Y-m-d|before:"2002-01-01"',
            
        ]);
    }
}

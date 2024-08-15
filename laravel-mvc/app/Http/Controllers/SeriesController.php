<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        // return redirect('https://www.google.com');
        // return $request->get('id');

        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        return view('series.listar-series')->with('series', $series);
    }

    public function create()
    {
        return view('series.adicionar-series');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController extends Controller
{
    public function index (Request $request)
    {
        // return redirect('https://www.google.com');
        // return $request->get('id');

        $series = Serie::query()->orderBy('nome')->get();
        // dd($series);
        return view('series.listar-series')->with('series', $series);
    }

    public function create()
    {
        return view('series.adicionar-series');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return redirect(route('series.index'));
    }

    public function destroy(Request $request)
    {
        // dd($request->id);
        Serie::destroy($request->id);
        return redirect(route('series.index'));
    }
}

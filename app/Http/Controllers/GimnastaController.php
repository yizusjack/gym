<?php

namespace App\Http\Controllers;

use App\Models\Gimnasta;
use Illuminate\Http\Request;

class GimnastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gimnastas = Gimnasta::all(); //puede ser get()
        return view('gimnastas.indexGimnasta', compact('gimnastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gimnastas.createGimnasta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_g' => ['required', 'max:255'],
            'apellido_g' => ['required', 'max:255'],
            'fecha_n_g'=> ['required', 'date'],
        ]);

        $gimnasta = new Gimnasta();
        $gimnasta->nombre_g = $request->nombre_g;
        $gimnasta->apellido_g = $request->apellido_g;
        $gimnasta->fecha_n_g = $request->fecha_n_g;
        $gimnasta->save();

        return redirect('gimnasta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gimnasta $gimnasta)
    {
        return view('gimnastas/show-gimnasta', compact('gimnasta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gimnasta $gimnasta)
    {
        return view('gimnastas/edit-gimnasta', compact('gimnasta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gimnasta $gimnasta)
    {
        $request->validate([
            'nombre_g' => ['required', 'max:255'],
            'apellido_g' => ['required', 'max:255'],
            'fecha_n_g'=> ['required', 'date'],
        ]);
        
        $gimnasta->nombre_g = $request->nombre_g;
        $gimnasta->apellido_g = $request->apellido_g;
        $gimnasta->fecha_n_g = $request->fecha_n_g;
        $gimnasta->save();
        return redirect()->route('gimnasta.show', $gimnasta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gimnasta $gimnasta)
    {
        $gimnasta->delete();
        return redirect()->route('gimnasta.index');
    }
}

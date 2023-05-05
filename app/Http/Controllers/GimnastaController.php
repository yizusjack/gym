<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Picture;
use App\Models\Gimnasta;
use Illuminate\Http\Request;

class GimnastaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gimnastas = Gimnasta::with('paises')->get(); //Using 'with' we are implementing eager loading
        return view('gimnastas.indexGimnasta', compact('gimnastas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $paises = Pais::orderBy('nombre_p')->get();
        return view('gimnastas.createGimnasta', compact('paises'));
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
        Gimnasta::create($request->all()); 
        return redirect('gimnasta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gimnasta $gimnasta)
    {
        $imagen = Picture::where('gimnastas_id', '=', $gimnasta->id)->get(); //Searches up for the pictures of the gymnast
        $paises= Pais::find($gimnasta->id);
        
        return view('gimnastas.show-gimnasta', compact('gimnasta', 'paises', 'imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gimnasta $gimnasta)
    {
        $paises = Pais::orderBy('nombre_p')->get();
        return view('gimnastas.edit-gimnasta', compact('gimnasta', 'paises'));
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
        
        /*$gimnasta->nombre_g = $request->nombre_g;
        $gimnasta->apellido_g = $request->apellido_g;
        $gimnasta->fecha_n_g = $request->fecha_n_g;
        $gimnasta->save();*/

        Gimnasta::where('id', $gimnasta->id)->update($request->except('_token', '_method')); /*Searchs up for the gymnast and updates it with the request exceptuating the token and method*/

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

    /**
     * Show the gallery with all pictures from a gymnast
     */
    public function galeria(Gimnasta $gimnasta)
    {
        $pics = Picture::where('gimnastas_id', '=', $gimnasta->id)->get();
        return view('gimnastas.galeriaGimnasta', compact('gimnasta', 'pics'));
    }
}

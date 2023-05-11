<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Event;
use App\Models\Competencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
             'nombre_e' => ['required', 'max:255'],
            'fecha_i_e'=> ['required', 'date'],
            'fecha_f_e'=> ['required', 'date'],
            'paises_id'=> ['required'],
            'competencias_id'=> ['required'],
        ]);
        $request['user_id'] = Auth::user()->id;
        Event::create($request->all());
        return redirect()->route('competencia.show', $request->competencias_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $this->authorize('update', $event);
        $paises = Pais::orderBy('nombre_p')->get();
        $competencias = Competencia::all();
        return view('events.editEvent', compact('paises', 'event', 'competencias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {   
        if (Auth::user()->cannot('update', $event)) {
            abort(404);
       }
       if ($response->allowed()) {
            $request->validate([
                'nombre_e' => ['required', 'max:255'],
                'fecha_i_e'=> ['required', 'date'],
                'fecha_f_e'=> ['required', 'date'],
                'paises_id'=> ['required'],
                'competencias_id'=> ['required'],
            ]);
                
            Event::where('id', $event->id)->update($request->except('_token', '_method')); /*Searchs up for the gymnast and updates it with the request exceptuating the token and method*/

            return redirect()->route('competencia.show', $request->competencias_id);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $this->authorize('delete', $event);
        
        $event->delete();
        return redirect()->route('competencia.index');
    }

    public function newEvent(Competencia $competencia)
    {
        $paises = Pais::orderBy('nombre_p')->get();
        return view('events.createEvent', compact('paises', 'competencia'));
    }
}

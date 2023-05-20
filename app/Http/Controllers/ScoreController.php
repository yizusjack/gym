<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Round;
use App\Models\Score;
use App\Models\Aparato;
use App\Models\Gimnasta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('scores.allScores');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        $gimnastas = Gimnasta::all();
        $rounds = Round::all();
        $aparatos = Aparato::all();

        return view('scores.createScore', compact('event', 'gimnastas', 'rounds', 'aparatos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'gimnastas_id'=>['required', 'exists:gimnastas,id'], 
           'events_id'=>['required', 'exists:events,id'],
           'rounds_id'=>['required', 'exists:rounds,id'],
           'aparatos_id'=>['required', 'exists:aparatos,id'],
           'difficulty_s'=>['decimal:0,3', 'required', 'min:0', 'max:8'],
           'execution_s'=>['decimal:0,2', 'required', 'min:0', 'max:10'],
           'deductions_s'=>['decimal:0,2', 'required', 'min:0', 'max:10'],  
       ]);
       $request['user_id'] = Auth::user()->id;
       $request['total_s'] = $request->difficulty_s + $request->execution_s - $request->deductions_s;
       Score::create($request->all());
       return redirect()->route('event.show', $request->events_id)->with('score', 'agregada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Score $score)
    {
        $this->authorize('update', $score);
        $gimnastas = Gimnasta::all();
        $rounds = Round::all();
        $aparatos = Aparato::all();

        return view('scores.editScore', compact('score', 'gimnastas', 'rounds', 'aparatos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Score $score)
    {
        $this->authorize('update', $score);
        $request->validate([
            'gimnastas_id'=>['required', 'exists:gimnastas,id'], 
            'events_id'=>['required', 'exists:events,id'],
            'rounds_id'=>['required', 'exists:rounds,id'],
            'aparatos_id'=>['required', 'exists:aparatos,id'],
            'difficulty_s'=>['decimal:0,3', 'required', 'min:0', 'max:8'],
            'execution_s'=>['decimal:0,2', 'required', 'min:0', 'max:10'],
            'deductions_s'=>['decimal:0,2', 'required', 'min:0', 'max:10'],  
        ]);
        $request['user_id'] = Auth::user()->id;
        $request['total_s'] = $request->difficulty_s + $request->execution_s - $request->deductions_s;

        Score::where('id', $score->id)->update($request->except('_token', '_method'));

        return redirect()->route('event.show', $request->events_id)->with('score', 'editada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        $this->authorize('delete', $score);
        $event=$score->events_id;
        $score->delete();
        return redirect()->route('event.show', $event)->with('score', 'eliminada');
    }
}

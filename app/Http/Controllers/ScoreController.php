<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Round;
use App\Models\Score;
use App\Models\Aparato;
use App\Models\Gimnasta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

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
       $request['approved'] = Auth::user()->is_admin == true ? true : false; //si es administrador la aprobará, de lo contrario la deniega
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
        return redirect()->route('event.controlI');
    }

    /**
     * Creates the PDF file with scores
     */
    public function createpdf(Event $event){
        $scoresQ= Score::query()
        ->with(['gimnastas', 'events', 'rounds', 'aparatos'])
        ->where('events_id', $event->id)
        ->where('rounds_id', 1)
        ->orderBy('aparatos_id')
        ->orderBy('total_s', 'desc')
        ->orderBy('execution_s', 'desc')
        ->orderBy('difficulty_s', 'desc')
        ->get();

        $scoresT= Score::query()
        ->with(['gimnastas', 'events', 'rounds', 'aparatos'])
        ->where('events_id', $event->id)
        ->where('rounds_id', 2)
        ->orderBy('aparatos_id')
        ->orderBy('total_s', 'desc')
        ->orderBy('execution_s', 'desc')
        ->orderBy('difficulty_s', 'desc')
        ->get();

        $scoresA= Score::query()
        ->with(['gimnastas', 'events', 'rounds', 'aparatos'])
        ->where('events_id', $event->id)
        ->where('rounds_id', 3)
        ->orderBy('aparatos_id')
        ->orderBy('total_s', 'desc')
        ->orderBy('execution_s', 'desc')
        ->orderBy('difficulty_s', 'desc')
        ->get();

        $scoresE= Score::query()
        ->with(['gimnastas', 'events', 'rounds', 'aparatos'])
        ->where('events_id', $event->id)
        ->where('rounds_id', 4)
        ->orderBy('aparatos_id')
        ->orderBy('total_s', 'desc')
        ->orderBy('execution_s', 'desc')
        ->orderBy('difficulty_s', 'desc')
        ->get();

        //$pdf = Pdf::loadView('scores.scorepdf', compact('scoresQ'));
        //return $pdf->stream()->setOptions(['defaultFont' => 'sans-serif']);
        $pdf = PDF::loadView('scores.scorepdf', compact('scoresQ', 'scoresT', 'scoresA', 'scoresE', 'event'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();
    }

    public function aproveI(Score $score) //aprobar
    {
        if($score->approved==0){
            Score::where('id', $score->id)->update(['approved' => true]);
        }

        return redirect()->route('event.controlI', $score->events_id);
    }

    public function denyI(Score $score) //aprobar
    {
        $ret = $score->events_id;
        if($score->approved==0){
            $score->forceDelete();
        }

        return redirect()->route('event.controlI', $ret);
    }
}

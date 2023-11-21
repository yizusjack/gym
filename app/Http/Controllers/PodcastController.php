<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('podcast.podcastIndex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('podcast.podcastCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_p' => ['required', 'max:255'],
            'description_p' => ['required'],
            'url_p' => ['required', 'url'],
        ]);
        //dd($request);
        $request['description_p'] = nl2br($request->description_p);
        //dd($request);

        Podcast::create($request->all());
        return redirect()->route('podcast.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Podcast $podcast)
    {
        return view('podcast.podcastShow', compact('podcast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Podcast $podcast)
    {
        return view('podcast.podcastEdit', compact('podcast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Podcast $podcast)
    {
        $request->validate([
            'title_p' => ['required', 'max:255'],
            'description_p' => ['required'],
            'url_p' => ['required', 'url'],
        ]);
        //dd($request);
        $request['description_p'] = nl2br($request->description_p);
        Podcast::where('id', $podcast->id)->update($request->except('_token', '_method'));

        return redirect()->route('podcast.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Podcast $podcast)
    {
        $podcast->delete();
        return redirect()->route('podcast.index');
    }
}

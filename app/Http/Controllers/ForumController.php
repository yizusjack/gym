<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;
use Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forum = Forum::orderBy('created_at', 'desc')->get();
        return view('forums.indexForum', compact('forum'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forums.createForum');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required',  'max:255'],
            'content' => ['required'],
        ]);

        $forum = new forum();
        $forum->title = $request->input('title');
        $forum->content = nl2br($request->input('content'));
        $forum->user_id = Auth::id();
        $forum->created_at = now();
        $forum->save();
        
        return redirect('forum')->with('forum', 'agregado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Forum $forum)
    {
        return view('forums.showForum', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forum $forum)
    {
        return view('forums.editForum', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => ['required',  'max:255'],
            'content' => ['required'],
        ]);

    
        $forum->title = $request->input('title');
        $forum->content = $request->input('content');
        $forum->save();
        
        return redirect()->route('forum.show', $forum)->with('forum', 'editado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->route('forum.index')->with('forum', 'eliminado');
    }
}

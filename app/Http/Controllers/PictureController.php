<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures = Picture::all();

        return view('pictures.indexPicture', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile('picture') && $request->file('picture')->isValid()){
            $route = $request->picture->store('public');

            $pictures = new Picture();
            $pictures->hash = $route;
            $pictures->nombre = $request->picture->getClientOriginalName();
            $pictures->extension = $request->picture->guessExtension();
            $pictures->mime = $request->picture->getMimeType();
            $pictures->gimnastas_id = $request->gimnastas_id;
            $pictures->save();

        }
        return redirect('gimnasta');
    }

    /**
     * Display the specified resource.
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Picture $picture)
    {
        Storage::delete($picture->hash);
        $picture->delete();
        return redirect()->route('picture.index');
    }
}

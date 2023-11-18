<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('elements.elementsIndex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('elements.elementCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_el' => ['required', 'max:255'],
            'alias_el' => ['max:255'],
            'description_el' => ['required', 'max:255'],
            'value' => ['required',
                Rule::in(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'])],
            'type' => ['required',
            Rule::in(['A', 'T', 'D'])],
        ]);

        $category = $request->value . $request->type;
        $val = 0.0;

        switch ($request->value){
            case 'A':
                $val = 0.1;
            break;

            case 'B':
                $val = 0.2;
            break;

            case 'C':
                $val = 0.3;
            break;

            case 'D':
                $val = 0.4;
            break;

            case 'E':
                $val = 0.5;
            break;

            case 'F':
                $val = 0.6;
            break;

            case 'G':
                $val = 0.7;
            break;

            case 'H':
                $val = 0.8;
            break;

            case 'I':
                $val = 0.9;
            break;

            case 'J':
                $val = 1.0;
            break;
        }
        $request['value_el'] = $val;
        $request['category_el'] = $category;
        $request['aparatos_id'] = 4;

        Element::create($request->all());

        return redirect('elements');
    }

    /**
     * Display the specified resource.
     */
    public function show(Element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Element $element)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Element $element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Element $element)
    {
        //
    }
}

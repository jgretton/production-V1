<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parts;

class PartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $part = Parts::orderby('id', 'desc')->paginate(10);
        return view('dashboard.parts.index')->withPart($part);
    }

    public function create()
    {
        return view('dashboard.parts.create');
    }

    public function store()
    {
        Parts::create(request()->validate([
            'material' => 'required',
            'cycleTime' => 'required',
            'programNumber' => 'required',
            'drawingNumber' => 'required',
        ]));

        return redirect('dashboard/parts/');
    }

    public function show($id)
    {

    }

    public function edit(Parts $part)
    {
        return view('dashboard.parts.edit', compact('part'));
    }

    public function update(Parts $part)
    {
        $part->update(request()->validate([
            'material' => 'required',
            'cycleTime' => 'required',
            'programNumber' => 'required',
            'drawingNumber' => 'required',
        ]));

        return redirect('dashboard/parts/');
    }

    public function destroy(Parts $part)
    {
        $part -> delete();

        return redirect('dashboard/parts');
    }
}

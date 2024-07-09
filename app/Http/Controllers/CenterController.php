<?php

namespace App\Http\Controllers;

use App\Http\Requests\CenterRequest;
use App\Models\Center;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Center::all();
        return view('centers.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $centers = new Center();
        return view('centers.create', compact('centers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CenterRequest $request)
    {
        Center::create($request->validated());
        return redirect()->route('centers.index')->with('success', 'El centro se ha registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $centers = Center::find($id);
        return view('centers.show', compact('centers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $centers = Center::find($id);
        return view('centers.edit', compact('centers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CenterRequest $request, int $id)
    {
        $centers = Center::find($id);
        $centers->update($request->validated());
        return redirect()->route('centers.index')->with('success','El centro se ha registrado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $centers = Center::find($id);
        $centers->delete();
        return redirect()->route('centers.index')->with('success', 'El centro se ha eliminado con exito');
    }
}

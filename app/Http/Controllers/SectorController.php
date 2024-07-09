<?php

namespace App\Http\Controllers;

use App\Http\Requests\SectorRequest;
use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectors = Sector::all();
        return view('sectors.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sectors = new Sector();
        return view('sectors.index', compact('sectors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SectorRequest $request)
    {
        Sector::create($request->validated());
        return redirect()->route('sectors.index')->with('success', 'El Sector se ha registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $sectors = Sector::find($id);
        return view('sectors.show', compact('sectors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $sectors = Sector::find($id);
        return view('sectors.edit', compact('sectors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SectorRequest $request, int $id)
    {
        $sectors = Sector::find($id);
        $sectors->update($request->validated());
        return redirect()->route('sectors.index')->with('success', 'El sector se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sectors = Sector::find($id);
        $sectors->delete();
        return redirect()->route('sectors.index')->with('success', 'El Sector se ha eliminado con exito');
    }
}

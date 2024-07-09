<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialtyRequest;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialties = new Specialty();
        return view('specialties.index', compact('specialties'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialtyRequest $request)
    {
        Specialty::create($request->validated());
        return redirect()->route('specialties.index')->with('success', 'La especialidad se ha registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $specialties = Specialty::find($id);
        return view('specialties.show', compact('specialties'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $specialties = Specialty::find($id);
        return view('specialties.edit', compact('specialties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialtyRequest $request, int $id)
    {
        $specialties = Specialty::find($id);
        $specialties->update($request->validated());
        return redirect()->route('specialties.index')->with('success', 'La Especialidad se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $specialties = Specialty::find($id);
        $specialties->delete();
        return redirect()->route('specialties.index')->with('success', 'La Especialidad se ha eliminado con exito');
    }
}

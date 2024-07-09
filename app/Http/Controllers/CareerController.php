<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareerRequest;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers = Career::all();
        return view('careers.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $careers = new Career();
        return view('careers.index', compact('careers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CareerRequest $request)
    {
        Career::create($request->validated());
        return redirect()->route('careers.index')->with('success','La carrera se ha registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $careers = Career::find($id);
        return view('careers.show', compact('careers'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $careers = Career::find($id);
        return view('careers.show', compact('careers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CareerRequest $request, int $id)
    {
        $careers = Career::find($id);
        $careers->update($request->validated());
        return redirect()->route('careers.index')->with('success','La carrera se ha Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $careers = Career::find($id);
        $careers->delete();
        return redirect()->route('careers.index')->with('success','La carrera se ha eliminado con exito');
    }
}

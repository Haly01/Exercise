<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubjectRequest;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.ndex', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = new Subject();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SubjectRequest $request)
    {
        Subject::create($request->validated());
        return redirect()->route('subjects.index')->with('success', 'La materia se ha registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $subjects = Subject::find($id);
        return view('subjects.show', compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $subjects = Subject::find($id);
        return view('subjects.edit', compact('subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SubjectRequest $request, int $id)
    {
        $subjects = Subject::find($id);
        $subjects->update($request->validated());
        return redirect()->route('subjects.index')->with('success', 'La materia se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subjects = Subject::find($id);
        $subjects->delete();
        return redirect()->route('subjects.index')->with('success', 'La materia se ha eliminado con exito');
    }
}

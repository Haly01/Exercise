<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = new Student();
        return view('students.index', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('students.index')->with('success', 'El Estudiante se ha registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $students = Student::find($id);
        return view('students.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $students = Student::find($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, int $id)
    {
        $students = Student::find($id);
        $students->update($request->validated());
        return redirect()->route('students.index')->with('success', 'El Estudiante se ha actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect()->route('students.index')->with('success', 'El Estudiante se ha eliminado con exito');
    }
}

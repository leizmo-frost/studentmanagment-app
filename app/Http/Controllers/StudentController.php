<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        $input = $request->all();
        Student::create($input);
        return redirect('students')->with('flash_message', 'Student added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect('students')->with('flash_message', 'Student updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!');
    }
}

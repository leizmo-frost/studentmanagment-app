<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => 'required|string|max:255', // Example validation rule for the 'name' field
        'address' => 'required|string|max:255', // Example validation rule for the 'address' field
        'mobile' => 'required|string|max:15', // Example validation rule for the 'mobile' field
        // Add more validation rules for other input fields as needed
    ]);

    Teacher::create($request->all());
    return redirect('teachers')->with('flash_message', 'Teacher added!');
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect('teachers')->with('flash_message', 'Teacher updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'Teacher deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Enrollment;
use App\Models\Batch;
use App\Models\Student;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $batches = Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollments.create', compact('batches' , 'students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        Enrollment::create($request->all());
        return redirect('enrollments')->with('flash_message', 'Enrollment added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollments.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $enrollment = Enrollment::findOrFail($id);
        return view('enrollments.edit', compact('enrollment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            // Add validation rules for the input fields here
        ]);

        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($request->all());
        return redirect('enrollments')->with('flash_message', 'Enrollment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}

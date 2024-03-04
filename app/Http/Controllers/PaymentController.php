<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Enrollment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view('enrollments.index', compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add any other validation rules for other fields here
        ]);

        Payment::create($request->all());
        return redirect('payments')->with('flash_message', 'Payment added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments = Payment::findOrFail($id);
        return view('payments.edit')->with('Payment', $payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments = Payment::findOrFail($id);
        $enrollments = Enrollment::pluck('enroll_no','id');
        return view('enrollments.index', compact('enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // Add any other validation rules for other fields here
        ]);

        $payments = Payment::findOrFail($id);
        $payments->update($request->all());
        return redirect('payments')->with('flash_message', 'Payment updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }
}

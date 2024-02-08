<?php

namespace App\Http\Controllers;

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
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validation rules
        $data = $request->validate([
            'std_name' => 'required',
            'std_roll' => 'required|numeric',
            'std_adress' => 'required',
        ]);

        $student = new Student();

        $student->std_name = $request->std_name;
        $student->std_roll = $request->std_roll;
        $student->std_adress = $request->std_adress;
        $student->save();

        // Redirect or respond as needed after successful storage
        return redirect()->route('students.index')->with('success', 'Data has been successfully stored.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
            return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->std_name = $request->std_name;
        $student->std_roll = $request->std_roll;
        $student->std_adress = $request->std_adress;
        $student->save();
        return redirect()->route('students.index')->with('success', 'Data has been successfully udated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}

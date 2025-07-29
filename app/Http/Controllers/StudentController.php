<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $students = Student::all();
        // dd($students);
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('student/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $student = new Student;
        $student->admission_number = $request->admission_number;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->gender = $request->gender;
        $student->grade_id = "10";
        $student->nic_id = $request->nic_number;
        $student->phone_number = "4444";
        $student->nic_number = $request->nic_number;
        $student->date_of_birth = $request->date_of_birth;
        $student->student_address = $request->student_address;
        $student->join_data = $request->join_data;
        $student->save();
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $student = Student::find($id);
        $subjects = Student::find($id)->subjects;
        return view('student/show', compact('student','subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);

        return view('student/edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $student->admission_number = $request->admission_number;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->gender = $request->gender;
        $student->phone_number = $request->phone_number;
        $student->nic_number->$request->nic_number;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->join_date = $request->join_date;
        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
}

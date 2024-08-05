<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $student=Student::all();
        return view('students.index')->with('students',$student);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input=$request->all();
        Student::create($input);
        return redirect('students')->with('flash_message','Students added successfully!');
        
    }

    public function show(string $id): View
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
    public function edit(string $id): View
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('students')->with('flash_message', 'student Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message', 'Student deleted!'); 
    }
}
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
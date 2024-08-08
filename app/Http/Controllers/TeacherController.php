<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\view\View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() :View
    {
        $teacher=Teacher::all();
        return view('teachers.index')->with('teachers',$teacher);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input=$request->all();
        Teacher::create($input);
        return redirect('teachers')->with('flash_message','Teachers added successfully!');
        
    }

    public function show(string $id): View
    {
        $teacher = Teacher::find($id);
        return view('teachers.show')->with('teachers', $teacher);
    }
    public function edit(string $id): View
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $teacher);
    }
    public function update(Request $request, string $id): RedirectResponse
    {
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect('teachers')->with('flash_message', 'Teacher Updated!');  
    }
    
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message', 'Teacher deleted!'); 
    }
}
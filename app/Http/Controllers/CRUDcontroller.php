<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CRUD;

class CRUDcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students = CRUD::all();  // SELECT * FROM crud
        $students = CRUD::get(['student_id', 'first_name', 'last_name']); // SELECT student_id, first_name, last_name FROM crud
        return view('crud.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'student_id' => 'required',
            'address' => 'required',
            'dob' => 'required',
        ]);

        $student_id = $request->input('student_id');
        $email = $request->input('email');

        $student = CRUD::where('student_id', $student_id)->orWhere('email', $email)->first();
        if ($student) {
            return redirect()->back()->with('error', 'Student already exists');
        }
        
        return redirect('/crud')->with('success', 'Student has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = CRUD::where('student_id', $id)->first(); // SELECT * FROM crud WHERE student_id = $id

        return view('crud.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = CRUD::where('student_id', $id)->first(); // SELECT * FROM crud WHERE student_id = $id

        return view('crud.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

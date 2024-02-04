<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Http\Requests\StudentRegistrationRequest;
use App\action\StudentRegistrationAction;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=Student::get();
        return view('backend.maindashboard',compact('users'));
    }

    public function list()
    {
        $users=Student::get();
        return view('student.Dashboard',compact('users'));
    }

    public function create()
    {
        return view('student.Reg');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRegistrationRequest $request,StudentRegistrationAction $action)
    {
        $action->execute(collect($request->validated()));
        return redirect()->route('index');
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

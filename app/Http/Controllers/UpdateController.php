<?php

namespace App\Http\Controllers;
use App\action\StudentUpdateAction;
use App\Http\Requests\StudentUpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Student $student)
    {
        return view('student.Update',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentUpdateRequest $request,StudentUpdateAction $action ,Student $student )
    {
        $action->execute(collect($request->validated()),$student);
        return redirect()->route('Main');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {

        $student->delete();
        return redirect()->back();
    }
    
}

<?php

namespace App\Http\Controllers;

use App\action\TeacherRegistrationAction;
use App\Http\Requests\TeacherRequest;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
        return view('teacher.teacherRegistration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request,TeacherRegistrationAction $action)
    {
        $action->execute(collect($request->validated()));
        return redirect()->route('home');
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

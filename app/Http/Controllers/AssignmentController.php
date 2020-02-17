<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Course;


class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('assignment.create', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Assignment::create($this->validateAssignment());
        return  redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);
        $course = $assignment->course()->first();

        return view('assignment.show', ['course' => $course, 'assignment' => $assignment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        $assignment = Assignment::find($assignment->id);
        $courses = Course::all();
        $currentCourse = $assignment->course;
        return view('assignment.edit', ['assignment' => $assignment, 'currentCourse' => $currentCourse, 'courses'  => $courses]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Assignment $assignment)
    {
        $assignment->update($this->validateAssignment());
        return redirect()->route('assignment.show',$assignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assignment::destroy($id);
        return redirect()->route('dashboard.index');
    }

    /**
     * @return array
     */
    public function validateAssignment()
    {
        return request()->validate([
            'course_id' => 'required',
            'name' => 'required',
            'weight' => 'required',
            'grade' => 'required',
        ]);
    }
}

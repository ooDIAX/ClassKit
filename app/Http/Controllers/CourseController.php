<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    /**
     * Store a newly created course.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            // Add any other validation rules as needed
        ]);

        // Create the course
        $course = Course::create([
            'name' => $request->name,
            'teacher_id' => auth()->id(),
        ]);

        // Redirect or respond as needed
        return redirect()->route('dashboard')->with('success', 'Course created successfully.');
    }

    public function create()
    {
        return view('courses.create');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\User;

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

    // public function show(Course $course)
    // {
    //     // Eager load the materials related to the course
    //     $course->load('materials');

    //     // Pass the course and its associated materials to the view
    //     return view('courses.show', compact('course'));
    // }

    public function show(Course $course)
    {
        // Get the authenticated user
        $user = auth()->user();

        // Check if the user is enrolled in the course
        $isEnrolled = $user && $user->courses()->where('course_id', $course->id)->exists();

        // Eager load the materials related to the course
        $course->load('materials');

        // Pass the course, its associated materials, and enrollment status to the view
        return view('courses.show', compact('course', 'isEnrolled'));
    }
}

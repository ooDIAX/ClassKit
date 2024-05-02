<?php

// CourseEnrollmentController.php
namespace App\Http\Controllers;

use App\Models\Course;

class CourseEnrollmentController extends Controller
{
    public function enroll(Course $course)
    {
        // Ensure the user is authenticated before enrolling
        if (auth()->check()) {
            // Enroll the authenticated user in the course
            auth()->user()->courses()->syncWithoutDetaching([$course->id]);

            // Redirect back to the course details page
            return redirect()->route('courses.show', $course)
                             ->with('success', 'You have been enrolled in the course.');
        }

        // Redirect the user to login if they are not authenticated
        return redirect()->route('login')->with('error', 'Please log in to enroll in the course.');
    }
}

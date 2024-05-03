<?php

namespace App\Http\Controllers;

use App\Models\Course;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Retrieve the courses that the user is enrolled in
        $enrolledCourses = $user->courses;

        // Retrieve all other courses
        $otherCourses = Course::whereNotIn('id', $enrolledCourses->pluck('id'))->get();

        // Pass the enrolled courses and other courses to the view
        return view('dashboard', compact('enrolledCourses', 'otherCourses'));
    }

}
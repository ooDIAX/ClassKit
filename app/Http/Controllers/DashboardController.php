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
        $courses = Course::all();
        return view('dashboard', compact('courses'));
    }

}
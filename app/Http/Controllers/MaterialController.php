<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     public function create($course_id)
     {
        return view('materials.createMaterial', compact('course_id'));
     }

     public function store(Request $request)
    {
        // Validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);

        // Create the material
        Material::create([
            'name' => $request->name,
            'content' => $request->content,
            'course_id' => $request->course_id,
        ]);

        // Redirect back to the course details page
        return redirect()->route('courses.show', $request->course_id)->with('success', 'Material added successfully.');
    }

}
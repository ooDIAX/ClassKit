<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * Get the course that owns the material.
     */
    protected $fillable = ['name', 'content', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

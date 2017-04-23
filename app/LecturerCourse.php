<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LecturerCourse extends Model
{
    protected $table = 'lecturer_courses';

    protected $fillable = ['lecturer_id', 'course_code',];
}

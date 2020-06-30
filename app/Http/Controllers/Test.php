<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;

class Test extends Controller
{
    public function index()
    {
        $studentName = Student::find(2);
        $courseName = $studentName->course;
        return $studentName->course->field;
        
    }
}

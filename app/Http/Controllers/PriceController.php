<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\School;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function PriceForCourse(Course $course)
    {
        $schools = $course->schools()->withPivot('price')->get();
        return view('school.price-from-school', compact('course', 'schools'));
    }
}

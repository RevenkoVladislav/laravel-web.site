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

    public function GroupPrice(Course $course)
    {

    }

    public function InterestingPrice(Course $course)
    {

    }

    public function SchoolCourse(School $school, Course $course)
    {
        $courseInSchool = $school->courses()->wherePivot('course_id', $course->id)->first();

        if(!$courseInSchool){
            abort(404);
        }

        return $courseInSchool;
    }
}

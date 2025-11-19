<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\School;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function PriceForCourse(Course $course)
    {
        $schools = $course->schools()->withPivot('price')->orderByPivot('price', 'ASC')->get();
        $course->load('images');
        return compact('course', 'schools');
        //return view('school.price-from-school', compact('course', 'schools'));
    }

    public function GroupPrice(Request $request)
    {
        //докрутить валидацию
        $courses = Course::with([
            'schools' => fn(BelongsToMany $query) => $query->orderByPivot('price')
        ])
            ->whereIn('id', $request->query('id'))
            ->get();
        return $courses;
    }

    public function InterestingPrice(Course $course)
    {
        //ищем курсы у котороых коэффициент цен меньше 0.9, получаем у них id курсов
        $res = DB::table('schools')
            ->select(['course_id', DB::raw('MIN(price) / AVG(price) as coef')])
            ->join('course_school', 'schools.id', '=', 'course_school.school_id')
            ->groupBy('course_id')
            ->having('coef', '<', '0.9')
            ->orderBy('coef')
            ->limit(3)
            ->pluck('course_id');


        $courses = Course::with([
            'schools' => fn(BelongsToMany $query) => $query->orderByPivot('price')->limit(2)
        ])
            ->whereIn('id', $res)
            ->get();

        return $courses;
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

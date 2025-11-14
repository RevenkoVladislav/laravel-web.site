<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            ['title' => 'Udemy'],
            ['title' => 'skillbox'],
            ['title' => 'geekbrains']
        ];

        foreach ($schools as $school) {
            School::create($school);
        }

        $courses = [
            ['title' => 'learn PHP'],
            ['title' => 'learn Java'],
            ['title' => 'learn C#'],
            ['title' => 'learn JavaScript'],
            ['title' => 'learn Python']
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}

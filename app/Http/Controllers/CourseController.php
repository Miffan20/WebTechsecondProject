<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function form(){
        return view('courses.form');
    }

    public function getData(){

        $course = new Course();

        $course->name = request('name');
        $course->description = request('description');
        $course->faculty_id = request('faculty');
        $course->code = request('code');
        $course->ECTS = request('ects');

        $course->save();

        return redirect()->route('courses.index');
    }


    function index(){
        $faculties = Faculty::all();
        return view('courses.index')->with('faculties', $faculties);


    }
}

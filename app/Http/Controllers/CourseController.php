<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function form(){
        return view('courses.form');
    }

    public function getData(){

        $course = new Course();


        $course->name = request('name');
        $course->description = request('describtion');
        $course->faculty = request('faculty');
        $course->code = request('code');
        $course->ects = request('etcs');

        $course->save();
        return redirect()->route('courses.index');
    }


    function index(){
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }
}

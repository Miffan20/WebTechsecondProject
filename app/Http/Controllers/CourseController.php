<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function form(){

        //You need to add faculties array to the view, in order to process it in the form.blade.php file
        $faculties = Faculty::all();
        return view('courses.form')->with('faculties', $faculties);

    }

    public function getData(Request $request){



        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'faculty'=>'required',
            'code'=>'required',
            'ects'=>'required|numeric'
        ]);


        $course = new Course();

        $course->name = $request->get('name');
        $course->description = $request->get('description');
        $course->faculty_id = $request->get('faculty'); //|unique:faculty doesnt work
        $course->code = $request->get('code');
        $course->ECTS = $request->get('ects');

        $course->save();

        //return redirect()->route('courses.index'); //works to redirect to homepage
        return redirect()->route('courses.show',$course->id); //just needs to redirect this to the current course id, if you just put parameter, it works just fine with 1, this however does not work: $course.$this->get('id')


        //return redirect()->action([CourseController::class, 'formRedirect'], ['id'=>$this]); // this does not work


        //return redirect()->route('courses.redirectForm'); //this has better chances
    }


    public function index(){
        $faculties = Faculty::all();
        $courses = Course::all();
        return view('courses.index')->with('courses', $courses)->with('faculties',$faculties); //this needs to be with $courses aswell
        //followed this video https://laracasts.com/series/laravel-8-from-scratch/episodes/20


    }



    public function show(Course $key)
    {
        //return $key; // this shows the json-object
        return view('courses.show', compact('key'));
    }



}

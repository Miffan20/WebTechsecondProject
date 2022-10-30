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
            'ects'=>'required'
        ]);


        $course = new Course();

        $course->name = $request->get('name');
        $course->description = $request->get('description');
        $course->faculty_id = $request->get('faculty');
        $course->code = $request->get('code');
        $course->ECTS = $request->get('ects');

        $course->save();

        return redirect()->route('courses.index'); //works to redirect to homepage
        //return redirect()->action([CourseController::class, 'formRedirect'], ['id'=>$this]);
    }


    public function index(){
        $faculties = Faculty::all();
        return view('courses.index')->with('faculties', $faculties);


    }



}

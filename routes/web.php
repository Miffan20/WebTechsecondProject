<?php

use App\Http\Controllers\CourseController;
use App\Models\Course;
use App\Models\Faculty;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'courses')->name('home');




/*
 *
 * old index function from source code
Route::get('/courses', function() {
    $faculties = Faculty::all();
    return view('courses.index')->with('faculties', $faculties);
});

*/
Route::get('/courses', [CourseController::class, 'index']);

//Creating route for the create form
Route::get('courses/create', [CourseController::class, 'form']);



Route::get('courses/{course}', function() {
    return view('courses.show');
})->name('courses.show');


//post functions
Route::post('/courses', function (){
   $course = new Course();

    $course->name = request('name');
    $course->description = request('description');
    $course->faculty_id = request('faculty');
    $course->code = request('code');
    $course->ECTS = request('ects');

    $course->save();

    return redirect()->action([CourseController::class, 'index']);
});


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
Route::get('/courses', [CourseController::class, 'index'])
    ->name('courses.index');

//Creating route for the create form
Route::get('courses/create', [CourseController::class, 'form'])
        ->name('courses.form');


/*
 *

Route::get('courses/{course}', [CourseController::class, 'show'])
    ->name('courses.show');

*/

/*
 // this is original course.show function, and show2 is original show view
Route::get('courses/{course}', function() {
    return view('courses.show');
})->name('courses.show');
*/

//post functions
Route::post('/courses', [CourseController::class, 'getData'])
    ->name("courses.store");

/*
 // not used right now

Route::get('/courses/{course}', [CourseController::class, 'redirectForm'])
        ->name('courses.redirectFrom');
*/


//this view created the object, but needs to be redirected to a showpage

Route::get('courses/{key}', [CourseController::class, 'show'])
    ->name("courses.show");


Route::get('courses/{key}/edit', [CourseController::class, 'edit'])
    ->name("courses.edit");



<?php

use App\Http\Controllers\Teacher\Class_Controller;
use App\Http\Controllers\Teacher\Lesson_Controller;
use App\Http\Controllers\Teacher\Profile_Controller;
use App\Http\Controllers\Teacher\Quiz_Controller;
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

/* Teacher Profile */
Route::get('/show',[Profile_Controller::class,'index'])->name('index');
Route::post('/update/{id}',[Profile_Controller::class,'update'])->name('update.profile');
/* End Teacher Routes */

/* Class Routes */
Route::get('/teacher/{teacherDetailsId}/class-details', [Class_Controller::class, 'getClassDetails']);
Route::get('my_class/{id}',[Class_Controller::class,'classInnerDetails'])->name('myclass.view');
/* End Class Routes */

 
/* Lesson Routes */
Route::get('lesson/{id}',[Lesson_Controller::class,'lessons'])->name('lesson.view');
Route::get('/edit_topic_title/{id}',[Lesson_Controller::class,'edit']);
Route::get('/update_topic',[Lesson_Controller::class,'update']);
/* End Lesson Routes */

/* Article Routes */
 

/* End Article Routes */


/* Quiz Routes */
Route::get('my_class/quiz/{id}/{id1}',[Quiz_Controller::class,'index'])->name('get_quiz');
Route::POST('my_class/quiz/{id}/{id1}/store',[Quiz_Controller::class,'forum_data'])->name('get_quiz');
Route::POST('Quiz_store/{id}/{id1}/{id3}',[Quiz_Controller::class,'StoreQuiz'])->name('Store_quiz');
Route::get('Quiz/{id}/{id1}',[Quiz_Controller::class,'preview'])->name('show_preview');
Route::get('Edit/{id}/{id1}/{id2}',[Quiz_Controller::class,'edit'])->name('edit_quiz');
Route::POST('update/{id}/{id1}/{id2}',[Quiz_Controller::class,'update'])->name('update_quiz');

/* End Quiz Routes */


/* Student Rpoues */
Route::get('Marks/{id}/{id1}/{id2}',[Quiz_Controller::class,'Student_Marks'])->name('Marks');
Route::get('students/{id}',[Class_Controller::class,'Student_Tables'])->name('students');
/*End Student Rpoues */



Route::get('/notification', function () {
    return view('Teacher.Master_Page.Notification');
});

Route::get('/calandar', function () {
    return view('Teacher.Master_Page.Calandar_Event');
});

/* Teacher's Routes */
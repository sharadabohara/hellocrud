<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\studentController;

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

Route::get('/', function () {
    return view('students.student-layout');
});

// Route::get('create-student', function () {
//     return view('students.create-student');
// });

Route::get('view-student',[StudentController::class,'index'])->name('view-student');

Route::get('create-student',[StudentController::class,'create']);

Route::post('create-student',[StudentController::class,'store']);

Route::get('show-student/{id}',[StudentController::class,'show']);

Route::get('edit-student/{id}',[StudentController::class,'edit']);

Route::post('update-student/{id}',[StudentController::class,'update']);

Route::get('destroy-student/{id}',[StudentController::class,'destroy']);




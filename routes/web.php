<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::resource("/students", StudentController::class);

Route::resource("/teachers", TeacherController::class);

Route::resource("/courses", CourseController::class);

Route::resource("/batches", BatchController::class);

Route::resource("/enrollments", EnrollmentController::class);

Route::resource("/payments", PaymentController::class);

Route::get('/report/report/{pid}', [ReportController::class, 'report']);

Route::get("/logins", function (){
    return view(view: "home.logins");
});

Route::get("/admin", function (){
    return view(view: "dashboards.admin");
});

Route::get("/parent", function (){
    return view(view: "dashboards.parent");
});

Route::get("/student", function (){
    return view(view: "dashboards.student");
});

Route::get("/teacher", function (){
    return view(view: "dashboards.teacher");
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ClassesController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboardadmin', [AdminController::class, 'AdminDashboard'])->name('admin.dashboardadmin');

    Route::resource('/teachers', TeacherController::class);
    Route::resource('/classes', ClassesController::class);

});
Route::resource('/students', StudentController::class);

Route::resource('/teachers', TeacherController::class);
Route::resource('/classes', ClassesController::class);
route::middleware(['auth','role:teacher'])->group(function(){
    Route::get('/teacher/dashboardteacher', [TeachersController::class, 'TeacherDashboard'])->name('teacher.dashboardteacher');


});
route::middleware(['auth','role:student'])->group(function(){
    Route::get('/student/dashboardstudent', [StudentsController::class, 'StudentDashboard'])->name('student.dashboardstudent');

});
Route::get('/student/dashboardstudent', [StudentsController::class, 'StudentDashboard'])->name('student.dashboardstudent');
Route::get('/teacher/dashboardteacher', [TeachersController::class, 'TeacherDashboard'])->name('teacher.dashboardteacher');

Route::get('/admin/dashboardadmin', [AdminController::class, 'AdminDashboard'])->name('admin.dashboardadmin');


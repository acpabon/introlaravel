<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/cursos', [CourseController::class, 'index']);
// Route::get('/cursos/create', [CourseController::class, 'create']);
// Route::get('/cursos/{curso}', [CourseController::class, 'show']);
Route::get('/', HomeController::class);

Route::controller(CourseController::class)->group(function(){
    Route::get('/cursos', 'index')->name('courses.index');
    Route::get('/cursos/create', 'create')->name('courses.create');
    Route::get('/cursos/{curso}', 'show')->name('courses.show');
    Route::get('/cursos/edit/{curso}', 'edit')->name('courses.edit');
    Route::post('/cursos', 'store')->name('courses.store');
    Route::put('/cursos/{curso}', 'update')->name('courses.update');
    Route::delete('/cursos/{curso}', 'destroy')->name('courses.destroy');
});

// Route::get('/cursos/{curso?}', function ($curso = null) {
//     if (isset($curso)) 
//         return "Este es el curso de: {$curso}";
//     else 
//         return "Bienvenido a nuestra plataforma";
// });

Route::get('/user/{id}', function ($id) {
    return "Usuario con el ID: {$id}";
});


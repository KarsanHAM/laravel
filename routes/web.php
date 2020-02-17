<?php

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
    return view('welkom');
});

Route::get('/motivatie', function () {
    return view('motivatie');
});

Route::get('/beroepsbeeld', function () {
    return view('beroepsbeeld');
});

Route::get('/profiel', function () {

    return view('profiel', [
        'articles' => App\Blog::take(3)->latest()->get()
    ]);
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::post('/dashboard/courses', 'CourseController@store');

Route::get('/dashboard/assignments/create', 'AssignmentController@create');
Route::post('/dashboard/assignments', 'AssignmentController@store');
Route::get('/dashboard/courses/create', 'CourseController@create');

Route::get('/dashboard/assignments/{assignment}/edit', 'AssignmentController@edit');
Route::put('/dashboard/assignments/{assignment}');

Route::get('/dashboard/courses/{course}', 'CourseController@show')->name('course.show');
Route::get('/dashboard/assignments/{assignment}', 'AssignmentController@show')->name('assignment.show');
Route::get('/dashboard/courses/{course}/edit', 'CourseController@edit');
Route::put('/dashboard/courses/{course}', 'CourseController@update');

Route::get('/blog', 'BlogpostController@index')->name('posts.index');
Route::post('/blog', 'BlogpostController@store');
Route::get('/blog/create', 'BlogpostController@create');
Route::get('/blog/{post}', 'BlogpostController@show')->name('posts.show');
Route::get('/blog/{post}/edit', 'BlogpostController@edit');
Route::put('/blog/{post}', 'BlogpostController@update');


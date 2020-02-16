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

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/assignments/{assignment}', 'AssignmentController@show');
Route::get('/dashboard/assignments/create', 'AssignmentController@create');
Route::get('/dashboard/courses/create', 'CourseController@create');
Route::get('/dashboard/courses/{course}', 'CourseController@show');
Route::get('/blog', 'BlogpostController@index')->name('posts.index');
Route::post('/blog', 'BlogpostController@store');
Route::get('/blog/create', 'BlogpostController@create');
Route::get('/blog/{post}', 'BlogpostController@show')->name('posts.show');
Route::get('/blog/{post}/edit', 'BlogpostController@edit');
Route::put('/blog/{post}', 'BlogpostController@update');


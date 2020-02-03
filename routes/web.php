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

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/motivatie', function () {
    return view('motivatie');
});

Route::get('/beroepsbeeld', function () {
    return view('beroepsbeeld');
});

//Route::get('/{page}', function ($page) {
//    $pages = [
//        'welkom' => 'welkom',
//        'profiel' => 'profiel',
//        'dashboard' => 'dashboard'
//    ];
//
//    if (! array_key_exists($page, $pages)) {
//        abort(404, "Sorry this post does not exist");
//    }
//
//    return view($pages[$page]);
//});

//Route::get('/{page}', 'PagesController@display');

Route::get('/profiel', function () {

    return view('profiel', [
        'articles' => App\Blog::take(3)->latest()->get()
    ]);
});

Route::get('/blog', function () {

    return view('blog', [
        'articles' => App\Blog::take(3)->latest()->get()
    ]);
});

Route::get('/profiel/{post}', 'BlogpostController@show');

Route::get('/blog/{post}', 'BlogpostController@show');


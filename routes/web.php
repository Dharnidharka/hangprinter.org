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
    return view('homepage');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('contribute', function () {
    return view('contribute');
});

Route::get('about', function () {
    return view('about');
});

Route::get('show_blog', function () {
    return view('blog');
});

Route::get('documentation', function () {
    return view('documentation');
});

Route::get('graph-data', 'GraphController@showGraphData');

Route::get('register', ['uses' => 'RegisterController@showRegisterPage']);

Route::post('register', ['uses' => 'RegisterController@register']);

Route::post('checkEmailAvailable', ['uses' => 'RegisterController@checkEmailAvailable']);

Route::post('checkNickAvailable', ['uses' => 'RegisterController@checkNickAvailable']);

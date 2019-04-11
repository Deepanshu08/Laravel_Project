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
    return view('testing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/index', function () {
//     return view('index');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/International', function () {
    return view('International');
});
Route::get('/Technical', function () {
    return view('Technical');
});
Route::get('/Sports', function () {
    return view('Sports');
});
Route::get('/Business', function () {
    return view('Business');
});
Route::get('/quote', function () {
    return view('quote');
});



Route::post('/subscribe', 'NewsController@store');
Route::post('/contact', 'NewsController@contactstore');
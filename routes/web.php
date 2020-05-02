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

Route::get('/home', function () {
return view('welcome');
});


 Route::get('/user', function () {
    return view('Ticket.user');
});

Route::get('/Callcenter', function () {
    return view('Callcenter');
});

Route::get('/Admin', function () {
    return view('Admin');
});

Route::get('/Edituser', function () {
    return view('Edituser');
});


Route::get('/Jobcatogery', function () {
    return view('Jobcatogery');
});

Route::get('/test', function () {
    
    return view('test');
});

Route::get('/test1', function () {
    
    return view('test1');
});


Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::resource ('tickets', 'ticketsController');



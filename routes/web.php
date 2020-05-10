<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::resource('tickets', 'TicketController');
Route::resource('sysuser', 'SystemUserController');
Route::resource('departments', 'DepartmentController');
Route::resource('pdfview', 'PdfController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/tickets.getdownload', 'TicketController@getdownload')->name('getdownload');

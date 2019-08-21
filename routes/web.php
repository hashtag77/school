<?php

use App\StudentData;

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
    $students = StudentData::all();
    return view('students.index')->with('students', $students);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/students/store', 'StudentsController@store');

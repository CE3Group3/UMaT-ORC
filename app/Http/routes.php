<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

//Routes for login page for users
Route::get('studentlogin', function () {
    return view('login.student');
});
Route::get('lecturerlogin', function () {
    return view('login.lecturer');
});
Route::get('/reserved/auth/admin-login', function () {
    return view('login.admin');
});

Route::get('proceed','StudentController@proceed');
Route::get('lecturer/dashboard','LecturerController@dashboardLecturer');
Route::get('showresult','StudentController@showresult');
Route::get('logout','StudentController@logout');


//Post routes for users login
Route::post('studentlogin', 'StudentController@login');
Route::post('lecturerlogin', 'LecturerController@login');
Route::post('lecturer/fill', 'LecturerController@course');
Route::post('adminlogin', 'AdminController@login');
Route::post('fillresults', 'LecturerController@fillresult');




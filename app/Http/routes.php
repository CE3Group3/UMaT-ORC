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
Route::get('student/login', function () {
    return view('login.student');
});
Route::get('lecturer/login', function () {
    return view('login.lecturer');
});
Route::get('/reserved/auth/admin-login', function () {
    return view('login.admin');
});

Route::get('proceed','StudentController@proceed');
Route::get('lecturer/dashboard','LecturerController@dashboardLecturer');
Route::get('student/showresult','StudentController@showresult');
Route::get('student/logout','StudentController@logout');
Route::get('lecturer/logout','LecturerController@logout');
Route::get('admin/dashboard','AdminController@dashboard');


//Post routes for users login
Route::post('student/login', 'StudentController@login');
Route::post('lecturer/login', 'LecturerController@login');
Route::post('lecturer/fill', 'LecturerController@course');
Route::get('lecturer/success', 'LecturerController@success');
Route::get('lecturer/fail', 'LecturerController@fail');
Route::post('admin/login', 'AdminController@login');
Route::post('admin/courses', 'AdminController@courses');
Route::post('admin/approve', 'AdminController@approve');
Route::post('admin/approve/results', 'AdminController@approveResults');
Route::post('fillresults', 'LecturerController@fillresult');





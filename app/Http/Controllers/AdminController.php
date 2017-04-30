<?php

namespace App\Http\Controllers;


use App\Admin;
use App\Lecturer;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(){

        $admin  = new Admin();
        $username = strtolower(Input::get('username'));
        $password = strtolower(Input::get('pass'));
        $adminLogin =  $admin->checkUser($username,$password);
        return $adminLogin;
    }


    public function dashboard(){

        $lecturers =  Lecturer::all() ;
        return  view('dashboard.admin',['lecturers' => $lecturers]);
    }

    public function courses(){
        $lec_id = Input::get('lecturer');
        $course_codes = Lecturer::getCourses($lec_id);
        return view ('admin.getcourses', compact('course_codes'));
    }

    public function approve(){
        $course_code = Input::get('course');
        Session::put('getCourseCode', $course_code);
        $classList = Admin::getClassList($course_code);
        return view ('admin.approve', compact('classList'));
    }
    public function approveResults(){
        $marks = Input::get('marks');
        $index_no = Input::get('indexNo');
        $length = sizeof($index_no);
        $course_code = Session::get('getCourseCode');
        for($i = 0 ; $i < $length ; ++$i)
        {
           $var = Admin::makeUpdates($index_no[$i],$marks[$i],$course_code);

        }
        return view ('admin.complete', compact('course_code'));
    }

}

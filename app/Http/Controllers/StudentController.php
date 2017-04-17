<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Student;

use App\Http\Requests;

class StudentController extends Controller
{
    public function login(){

        $student  = new Student();
        $username = strtolower(Input::get('username'));
        $password = strtolower(Input::get('pass'));
        $studLogin =  $student->checkUser($username,$password);
        return $studLogin;
    }
}

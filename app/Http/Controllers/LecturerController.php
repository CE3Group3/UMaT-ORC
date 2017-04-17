<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecturer;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class LecturerController extends Controller
{
    public function login(){

        $lecturer  = new Lecturer();
        $username = strtolower(Input::get('username'));
        $password = strtolower(Input::get('pass'));
        $lecturerLogin =  $lecturer->checkUser($username,$password);
        return $lecturerLogin;
    }
}

<?php

namespace App\Http\Controllers;


use App\Admin;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function login(){

        $admin  = new Admin();
        $username = strtolower(Input::get('username'));
        $password = strtolower(Input::get('pass'));
        $adminLogin =  $admin->checkUser($username,$password);
        return $adminLogin;
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Student;

use App\Http\Requests;

class StudentController extends Controller
{
    public function login(){

        $student  = new Student();
        $username = strtolower(Input::get('username'));
        $password = strtolower(Input::get('pass'));
        $results =  $student->getUser($username);
        if(!empty($results)){
            $result = $results[0];
            if($username == $result['index_no'] && $password == $result['ref_no']){
                Session::put('IndexNumber', $username);
                $index = Session::get('IndexNumber');
                return redirect('proceed');
            }elseif($username == $result['index_no'] && $password != $result['ref_no']){

                $errorMessage = 'Your reference number is incorrect ';
                return view('errors.error', compact('errorMessage'));
            }else{

                $errorMessage = "something went wrong";
                return view('errors.error', compact('errorMessage'));
            }
        }
        else{

            $errorMessage = ' Wrong Index number';
            return view('errors.error', compact('errorMessage'));
        }


    }
    public function proceed(){
        $index = Session::get('IndexNumber');
        return view ('student.proceed', compact('index'));
    }
    public function showresult(){
        $index = Session::get('IndexNumber');
        $student = Student::where('index_no', '=', $index)->get();
        $name = $student[0]->student_name;
        $results = Student::getResult($index);
        return view('student.result', [ 'results' => $results , 'name' => $name]);

    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }
}

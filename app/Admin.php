<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Hash;
use Carbon\Carbon;

class Admin extends Model
{
    protected $table = 'loginadmin';

    protected $fillable = ['username', 'password'];

    public function checkUser($username , $password)
    {

        $pdo = DB::connection('mysql')->getPdo();
        $statement = $pdo->prepare("SELECT * FROM $this->table WHERE username = ?;");
        $statement->execute([$username]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $results = array_filter($results);
        // return $results[0];

        if(!empty($results)){
            $result = $results[0];
            if(Hash::check($password,$result['password'])){
               return redirect('admin/dashboard');
            }else{
                $errorMessage = 'Password incorrect';
                return view('errors.error', compact('errorMessage'));
            }
        }
        else{
            $errorMessage = 'User not found';
            return view('errors.error', compact('errorMessage'));
        }

    }

    public static function getClassList($course_code){

        $course = substr($course_code,0,2);
        $year = Carbon::now()->year;
        $dept = substr($course_code,0,2);
        $class  = substr($course_code,3,1);
        $current_year = $year - $class;
        $search_term = 4240;
//        $index_year = substr($current_year,2);
        // $deptNo = self::getDeptNo($class);
//        return $dept;

        return Result::where('course_code', '=', $course_code)
            ->where('index_no', 'LIKE',"%$search_term%")
            ->where('approved', '=',0)
            ->orderBy('index_no', 'asc')
            ->get();
    }

    public static function makeUpdates($index_no,$marks ,$course_code){

        $result = Result::where('index_no', $index_no)->where('course_code', $course_code)->get();


        if(isset($result[0])){
            $result[0]->approved = 1;
            $result[0]->marks = $marks;
            $result[0]->save();



        }else {
            $fail = "Failed";

        }


    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
class Lecturer extends Model
{
    protected $table = 'lecturers';

    protected $fillable = ['username', 'password'];

    public function getUser($username)
    {

        $pdo = DB::connection('mysql')->getPdo();
        $statement = $pdo->prepare("SELECT * FROM $this->table WHERE username = ?;");
        $statement->execute([$username]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $results = array_filter($results);
        return $results;

    }
    public static function getCourses($id){
//        return Result::where('index_no',"=" ,$indexNo)
//            ->where('approved',"=" ,0)
//            ->get();
        return LecturerCourse::where('lecturer_id', '=' , $id)
            ->get();

    }

    public static function getClassList($course_code){

        $course = substr($course_code,0,2);
        $year = Carbon::now()->year;
        $dept = substr($course_code,0,2);
        $class  = substr($course_code,3,1);
        $current_year = $year - $class;
//        $index_year = substr($current_year,2);
       // $deptNo = self::getDeptNo($class);
//        return $dept;

        return Student::where('year', '=', $current_year)
                        ->where('dept_id', '=',$dept)
                        ->orderBy('index_no', 'asc')
                        ->get();
    }

    private static function getDeptNo($class){

    }
}

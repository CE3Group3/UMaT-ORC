<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Auth;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['student_name', 'ref_no', 'index_no' , 'dept_id' , 'year'];


    public function checkUser($username , $password)
    {

        $pdo = DB::connection('mysql')->getPdo();
        $statement = $pdo->prepare("SELECT * FROM $this->table WHERE index_no = ?;");
        $statement->execute([$username]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $results = array_filter($results);
        // return $results[0];

        if(!empty($results)){
            $result = $results[0];
            if($username == $result['index_no'] && $password == $result['ref_no']){
                return 'Success';
            }elseif($username == $result['index_no'] && $password != $result['ref_no']){

                $errorMessage = 'wrong password';
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
}

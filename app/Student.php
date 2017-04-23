<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Auth;
use App\Result;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = ['student_name', 'ref_no', 'index_no' , 'dept_id' , 'year'];


    public function getUser($username)
    {

        $pdo = DB::connection('mysql')->getPdo();
        $statement = $pdo->prepare("SELECT * FROM $this->table WHERE index_no = ?;");
        $statement->execute([$username]);
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        $results = array_filter($results);
        // return $results[0];
        return $results;

    }

    public static function getResult($indexNo){
        return Result::where('index_no',"=" ,$indexNo)
            ->where('approved',"=" ,0)
            ->get();

    }

}

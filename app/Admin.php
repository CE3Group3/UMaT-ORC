<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Hash;

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
                return 'Success';
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
}

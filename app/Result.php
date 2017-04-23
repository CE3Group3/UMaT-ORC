<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use PDO;
use Auth;


class Result extends Model
{
    protected $table = 'results';

    protected $fillable = ['index_no', 'course_code', 'class', 'marks', 'approved'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students_info';
    //protected $primaryKey = 'user_id'; // will need later
    //protected $incrementing = false;
    //protected $keyType = 'string';
    //protected $connection =''; //this will be needed when you will work with multiple database
    public $timestamps = false;
}

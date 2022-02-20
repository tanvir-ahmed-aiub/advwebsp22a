<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\CourseStudent;

class Student extends Model
{
    use HasFactory;
    protected $table='students_info';
    //protected $primaryKey = 'user_id'; // will need later
    //protected $incrementing = false;
    //protected $keyType = 'string';
    //protected $connection =''; //this will be needed when you will work with multiple database
    public $timestamps = false;

    public function department(){
        return $this->belongsTo(Department::class,'d_id'); // maps student tables d_id with departments id
        //return $this->belongsTo(Department::class,'d_id','another column');
    }
    public function courses(){
        return $this->hasMany(CourseStudent::class,'st_id');
    }
}

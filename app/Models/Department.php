<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Department extends Model
{
    use HasFactory;

    //relationship functions
    public function students(){
        return $this->hasMany(Student::class,'d_id');
    }
    public function courses(){
        return $this->hasMany(Course::class,'offered_by');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function department(){
        return $this->belongsTo(Department::class,'offered_by');
    }
}

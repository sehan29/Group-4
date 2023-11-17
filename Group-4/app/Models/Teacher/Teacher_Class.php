<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_Class extends Model
{
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo(Teacher_Details::class,'teacher_Id');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class,'Class_No');
    }

    public function description()
    {
        return $this->hasOne(Class_Description::class,'Class_ID');
    }

}



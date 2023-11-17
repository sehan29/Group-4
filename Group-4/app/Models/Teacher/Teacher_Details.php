<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_Details extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->hasMany(Teacher_Class::class,'teacher_Id');
    }
}

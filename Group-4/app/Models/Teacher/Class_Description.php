<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Description extends Model
{
    use HasFactory;

    public function class_description()
    {
        return $this->belongsTo(Teacher_Class::class,'Class_ID');
    }
}

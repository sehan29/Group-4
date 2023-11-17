<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function classes_my()
    {
        return $this->belongsTo(Teacher_Class::class,'Class_No');
    }
}

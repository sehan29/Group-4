<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_Handle extends Model
{
    use HasFactory;
    protected $fillable = [
        'Quiz_ID',
        'Quiction',
        'Answer1',
        'Answer2',
        'Answer3',
        'Answer4',
        'Correct_Answer',

    ];

    public function quiz_handling()
    {
        return $this->belongsTo(Quiz_Forum::class,'Quiz_ID');
    }
}

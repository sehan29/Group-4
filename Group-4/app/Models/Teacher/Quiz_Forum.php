<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'Quiz_Un',
        'Quiz_Title',
        'Quiz_Description',
        'Start_Date',
        'Start_Time',
        'End_Date',
        'End_Time',
        'Time_Limit',
        'Number_of_Quection',
        'Time_Limit',

    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Get the last record in the table
            $lastRecord = Quiz_Forum::orderBy('id', 'desc')->first();

            // Initialize the numeric part
            $numericPart = 1;

            if ($lastRecord) {
                // Extract the numeric part from the last record and increment it
                $numericPart = intval(substr($lastRecord->Quiz_Un, 1)) + 1;
            }

            // Set the letter prefix and numeric part
            $model->Quiz_Un = 'Q' . $numericPart;
        });
    }

    public function quiz_forum()
    {
        return $this->hasOne(Quiz_Handle::class,'Quiz_ID');
    }
}

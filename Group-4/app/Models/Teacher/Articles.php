<?php

namespace App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Get the last record in the table
            $lastRecord = Articles::orderBy('id', 'desc')->first();

            // Initialize the numeric part
            $numericPart = 1;

            if ($lastRecord) {
                // Extract the numeric part from the last record and increment it
                $numericPart = intval(substr($lastRecord->Article_Unic, 1)) + 1;
            }

            // Set the letter prefix and numeric part
            $model->Article_Unic = 'A' . $numericPart;
        });
    }
}

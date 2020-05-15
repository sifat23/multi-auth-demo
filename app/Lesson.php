<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'lesson_name', 'lesson_description', 'lesson_code', 'class_id', 'lesson_path'
    ];

    // public function classroom()
    // {
    // 	return $this->belongsTo(classroom::class);
    // }
}

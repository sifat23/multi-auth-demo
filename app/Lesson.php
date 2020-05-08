<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'lesson_name', 'lesson_description',
    ];

    public function classroom()
    {
    	return $this->belongsTo(classroom::class);
    }
}

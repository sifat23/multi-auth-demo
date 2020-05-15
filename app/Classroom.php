<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'class_name', 'class_genre', 'class_code',
    ];

    // public function lessons()
    // {
    // 	return $this->hasMany(Lesson::class);
    // }

}

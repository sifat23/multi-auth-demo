<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'exam_name', 'time', 'total_mark',
    ];

}

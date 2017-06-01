<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table = 'lms_course';
    protected $fillable = ['name', 'number', 'desc'];
}

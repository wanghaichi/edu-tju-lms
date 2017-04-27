<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationInfo extends Model
{
    //
    protected $table = 'lms_reservation_info';
    protected $fillable = ['teacher_name', 'course_id', 'software', 'student_category', 'remark', 'class_category'];
}

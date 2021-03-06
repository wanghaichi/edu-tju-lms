<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationInfo extends Model
{
    //
    protected $table = 'lms_reservation_info';
    protected $fillable = ['teacher_name', 'teacher_tel', 'course_name', 'software', 'student_category', 'remark', 'class_category'];
    public function reservations(){
        return $this->hasMany('App\Models\Reservation', 'info_id');
    }

    public function getReservationDate(){
        $reservationLists = $this->reservations()->get();
//        dd($reservationLists);
        $comma = "";
        $str = "第";
        foreach($reservationLists as $item){
            $str .= $comma . $item->num_week;
            $comma = ",";
        }
        $str .= "周";
        return $str;
    }
}

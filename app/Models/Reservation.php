<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $table = 'lms_reservation';
    protected $fillable = ['info_id', 'num_week', 'num_day', 'num_course'];
}

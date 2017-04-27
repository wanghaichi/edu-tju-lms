<?php

namespace App\Http\Controllers\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        return view('Course.course');
    }
}

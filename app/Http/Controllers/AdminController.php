<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationInfo;
use App\Models\Reservation;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function reservation(){

        $reservations = Reservation::paginate(5);

        return view('admin.reservation', [
            '$reservations'       =>  $reservations,
            'moduleName'    =>  "实验室管理",
            'panelName'     =>  "借用情况"
        ]);
    }

    public function course(){


        $courses = ReservationInfo::paginate(5);
        return view('admin.course', [
            'courses'       =>  $courses,
            'moduleName'    =>  "实验室管理",
            'panelName'     =>  "课程信息"
        ]);
    }

    public function courseEdit($courseId){
        $course = ReservationInfo::findOrFail($courseId);
        $reservations = $course->reservations()->get()->toArray();
//        dd($reservations);
        $numDay = $reservations[0]['num_day'];
        $numCourse = $reservations[0]['num_course'];
        $weekCheck = array_fill(1, 20, 1);
        foreach($reservations as $reservation){
            // 表示当前已经选的周次
            $weekCheck[$reservation['num_week']] = 2;
        }

        // 获取已经被选择的周次
        $allRes = Reservation::where(['num_day' => $numDay , 'num_course' => $numCourse])->get()->toArray();
        foreach($allRes as $item){
            if($weekCheck[$item['num_week']] !== 2){
                $weekCheck[$item['num_week']] = 0;
            }
        }
//        dd($weekCheck);
        $weekStr = "";
        $rowStr = "<div class=\"row\">__ITEM__</div>";
        $rowItem = "";
        $weekName = [
            '1' => '第一周',
            '2' => '第二周',
            '3' => '第三周',
            '4' => '第四周',
            '5' => '第五周',
            '6' => '第六周',
            '7' => '第七周',
            '8' => '第八周',
            '9' => '第九周',
            '10' => '第十周',
            '11' => '第十一周',
            '12' => '第十二周',
            '13' => '第十三周',
            '14' => '第十四周',
            '15' => '第十五周',
            '16' => '第十六周',
            '17' => '第十七周',
            '18' => '第十八周',
            '19' => '第十九周',
            '20' => '第二十周',
        ];
        foreach ($weekCheck as $i => $v){
            $rowItem .= "<div class=\"col-md-2\"><div class=\"checkbox\"><label><input type=\"checkbox\" name=\"weeks[]\" value=\"$i\" ";
            if($v == 0){
                $rowItem .= "disabled>";
            }
            else if ($v == 1){
                $rowItem .= ">";
            }
            else {
                $rowItem .= "checked>";
            }
            $rowItem .= $weekName[$i];
            $rowItem .= "</label></div></div>";
            if($i % 6 == 0){
                $rowItem = str_replace("__ITEM__", $rowItem , $rowStr);
                $weekStr .= $rowItem;
                $rowItem = "";
            }
        }
        $rowItem = str_replace("__ITEM__", $rowItem , $rowStr);
        $weekStr .= $rowItem;
        $dayName = [
            1 => '一',
            2 => '二',
            3 => '三',
            4 => '四',
            5 => '五',
            6 => '六',
            7 => '日',
        ];
        $courseName = [
            '1' => '1-2节',
            '2' => '3-4节',
            '3' => '5-6节',
            '4' => '7-8节',
            '5' => '9-10节',
            '6' => '11-12节',
        ];
//        dd($weekStr);
        return view('admin.courseEdit', [
            'course'        =>  $course,
            'moduleName'    =>  "实验室管理",
            'panelName'     =>  "课程修改",
            'resTime'       =>  $dayName[$numDay] . $courseName[$numCourse],
            'weekStr'     =>  $weekStr
        ]);
    }

    public function courseUpdate($courseId, Request $request){
        $param = $request->all();
//        dd($param);
        $course = ReservationInfo::findOrFail($courseId);
        $weeks = $param['weeks'];
        $reservations = $course->reservations()->first();
        $numDay = $reservations->num_day;
        $numCourse = $reservations->num_course;
//        dd($numCourse);
        $reservations = $course->reservations()->get();
        foreach($reservations as $reservation){
            if(!in_array($reservation->num_week, $weeks)){
                $reservation->delete();
            }
        }
        foreach ($weeks as $week){
            $item = Reservation::where(['info_id' => $courseId, 'num_week' => $week])->first();
            if(!$item){
                Reservation::create([
                    'info_id'       =>  $courseId,
                    'num_week'      =>  $week,
                    'num_day'       =>  $numDay,
                    'num_course'    =>  $numCourse
                ]);
            }
        }
        $course->teacher_name   =$param['teacherName'];
        $course->teacher_tel    =$param['teacherTel'];
        $course->course_name    =$param['courseName'];
        $course->software       =$param['software'];
        $course->student_category   =$param['studentCategory'];
        $course->remark         =$param['remark'];
        $course->class_category =1;
        $course->status         =$param['status'];
        $course->save();
        return redirect(url('admin/reservation/course'));
    }

}

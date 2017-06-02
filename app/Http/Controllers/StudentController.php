<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservationInfo;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = ReservationInfo::all();

        // 鸟哥有毒
        $weeks = [1, 2, 3, 4, 5, 6, 7];
        $weekInfo = [
            '1' => '周一',
            '2' => '周二',
            '3' => '周三',
            '4' => '周四',
            '5' => '周五',
            '6' => '周六',
            '7' => '周日'
        ];
        $rows = [2, 3, 4, 5, 6, 7];
        $rowInfo = [
            '2' => '1-2',
            '3' => '3-4',
            '4' => '5-6',
            '5' => '7-8',
            '6' => '9-10',
            '7' => '11-12'
        ];
        $thvals = [
            '2' => '1-2',
            '3' => '3-4',
            '4' => '5-6',
            '5' => '7-8',
            '6' => '9-10',
            '7' => '11-12'
        ];
        $reservationList = array();
        foreach ($rows as $row){
            $rowItem = array();
            $rowItem['row_id'] = "row" . ($row);
            $rowItem['th_val'] = $thvals[$row];
            foreach ($weeks as $week){
                $rowItem['row_data'][] = [
                    'div_id' => "div_" . $row . $week,
                    'td_id' => $row . "-" . $week,
                    'div_title' => $weekInfo[$week] . $rowInfo[$row] . "节",
                    'data' => array(),
                ];
            }
            $reservationList[] = $rowItem;
        }
//
//        dd($reservationList);
        foreach($reservations as $reservation){
            // 获取某一个预约下的所有时间格子，映射到准备好的数组里面。
            $rlist = $reservation->reservations;
//            dd($rlist);
            foreach($rlist as $item){
                $num_week = intval($item->num_week);
                $num_day = intval($item->num_day) - 1;
                $num_course = intval($item->num_course) - 1;
//                dd($reservation->id) ;
                if(isset($reservationList[$num_course]['row_data'][$num_day]['data'][$reservation->id])){

                    $reservationList[$num_course]['row_data'][$num_day]['data'][$reservation->id]['week'] .= ",$num_week";
                }else{
//                    dd($num_week);
                    $reservationList[$num_course]['row_data'][$num_day]['data'][$reservation->id] = [
                        'week' => $num_week,
                        'name' => $reservation->course_name,
                        'teacher_name' => $reservation->teacher_name,
                        'teacher_tel' => $reservation->teacher_tel,
                        'software'  => $reservation->software,
                        'remark'    => $reservation->remark,
                    ];
                }
            }
        }
        return view('student.index', ['reservationList' => $reservationList]);
    }
}

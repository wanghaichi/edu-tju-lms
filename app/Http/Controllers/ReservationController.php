<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use App\Models\ReservationInfo;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * 教师登录后看到的预约界面
     */
    public function index()
    {
        //
        $reservations = ReservationInfo::all();

        // 鸟哥有毒
        $weeks = [1, 2, 3, 4, 5, 6, 7];
        $rows = [2, 3, 4, 5, 6, 7];
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
                        'name' => $reservation->course_name
                    ];
                }
            }
        }
//        dd($reservationList);
        return view('reservation.index', ['reservationList' => $reservationList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $param = $request->all();
//        dd($param);
        $reservationInfo = ReservationInfo::create([
            'teacher_name'      =>  $param['teacherName'] ,
            'teacher_tel'       =>  $param['teacherTel'] ,
            'course_name'       =>  $param['courseName'] ,
            'software'          =>  $param['software'] ,
            'student_category'  =>  $param['studentCategory'] ,
            'remark'            =>  $param['remark'] ,
            'class_category'    =>  1,
        ]);
        $infoId = $reservationInfo['id'];
        $num_weeks = $param['numWeek'];
        $num_weeks = explode(",", $num_weeks);
        $reservation = array();
        foreach ($num_weeks as $num_week){
            if(intval($num_week) >= 1 && intval($num_week) <= 20){
                $reservation[] = Reservation::create([
                    'info_id'       =>  $infoId,
                    'num_week'      =>  $num_week,
                    'num_day'       =>  $param['numDay'],
                    'num_course'    =>  $param['numCourse']
                ]);
            }
        }
        return response()->json([
            'code' => 50002,
            'msg'  => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

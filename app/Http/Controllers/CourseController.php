<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Symfony\Component\Routing\Exception\InvalidParameterException;
use Illuminate\Support\Facades\Auth;
class CourseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $course = Course::get()->all();
        return response()->json($course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course.create');
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
        $data = $request->all();
        $errorMsg = "";
        if(!$data['name'])
            $errorMsg .= "Miss name !";
        else if (!$data['number'])
            $errorMsg .= "Miss number !";
        else if (!$data['desc'])
            $errorMsg .= "Miss description !";
        if($errorMsg !== ""){
            throw new InvalidParameterException($errorMsg, 50000);
        }
        return response()->json(Course::create([
            'name' => $data['name'],
            'number' => $data['number'],
            'desc'  => $data['desc']
        ]));
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
        $course = Course::findOrFail($id);
        return response()->json($course);
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
        $course = Course::findOrFail($id);
        return view('edit',['course' => $course]);
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
        $course = Course::findOrFail($id);
        $param = $request->all();
        $course->name = $param['name'];
        $course->desc = $param['desc'];
        $course->number = $param['number'];
        $course->save();
        return response()->json('success', 50001);
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
        $course = Course::findOrFail($id);
        $course->delete();
        return response()->json('success', 50001);
    }
}

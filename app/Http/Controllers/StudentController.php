<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentInfoRequest;
use App\StudentInternInfo;
use Illuminate\Http\Request;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->except('supervisor');

        $user = Auth::User();
        

        $StudentInfo = new StudentInternInfo();

        
        if($user->StudentInfo->id = $user->id){
          
            $StudentInfo = $StudentInfo->findOrFail($user->id);

            $StudentInfo->user_id = $user->id;
            $StudentInfo->intern_semester = $request->intern_semester;
            $StudentInfo->group_id = $request->group_id;
            $StudentInfo->intern_arranged_by = $request->intern_arranged_by;
            $StudentInfo->intern_starting_date = $request->intern_starting_date;
            $StudentInfo->completed_credit_till_now = $request->completed_credit_till_now;
            $StudentInfo->specification = $request->specification;
            $StudentInfo->result_till_now = $request->result_till_now;

            $StudentInfo->save();
        }else{
            $StudentInfo->user_id = $user->id;
            $StudentInfo->intern_semester = $request->intern_semester;
            $StudentInfo->group_id = $request->group_id;
            $StudentInfo->intern_arranged_by = $request->intern_arranged_by;
            $StudentInfo->intern_starting_date = $request->intern_starting_date;
            $StudentInfo->completed_credit_till_now = $request->completed_credit_till_now;
            $StudentInfo->specification = $request->specification;
            $StudentInfo->result_till_now = $request->result_till_now;

            $StudentInfo->save();
        }


        $studentId = StudentInternInfo::where('user_id', '=', $user->id)->get();
        
        return view('front/student/studentAcademicInfo');

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

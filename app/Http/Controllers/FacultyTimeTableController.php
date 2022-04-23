<?php

namespace App\Http\Controllers;

use App\Models\FacultyTimeTable;
use App\Models\Faculty;
use App\Models\SubjectMaster;
use App\Http\Requests\StoreFacultyTimeTableRequest;
use App\Http\Requests\UpdateFacultyTimeTableRequest;

class FacultyTimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultys = Faculty::all();
        $subjects = SubjectMaster::all();
        $facultyTimeTable = FacultyTimeTable::all();
        // dd($subjects);
        return view('factable',compact('facultys','subjects','facultyTimeTable'));
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
     * @param  \App\Http\Requests\StoreFacultyTimeTableRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacultyTimeTableRequest $request)
    {
        unset($request['_token']);
        unset($request['_method']);
        // return $request;
        foreach ($request->toArray() as $key => $value) {
            // return $value['start_time'];
            $minutes = round(abs(strtotime($value['start_time']) - strtotime($value['end_time'])) / 60,2);
            $newtime = new FacultyTimeTable();
            $newtime->subject_id = $value['subject'];
            $newtime->faculty_id = $value['faculty'];
            $newtime->date = $value['date'];
            $newtime->session_start_time = $value['start_time'];
            $newtime->session_end_time = $value['end_time'];
            $newtime->duration = (string) $minutes;
            $newtime->save();
        }
        // return $request;
        // return $request['form1']['start_time'];
        // $diff = date_diff($request['form1']['start_time'],$request['form1']['end_time']);
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacultyTimeTable  $facultyTimeTable
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyTimeTable $facultyTimeTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacultyTimeTable  $facultyTimeTable
     * @return \Illuminate\Http\Response
     */
    public function edit(FacultyTimeTable $facultyTimeTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacultyTimeTableRequest  $request
     * @param  \App\Models\FacultyTimeTable  $facultyTimeTable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacultyTimeTableRequest $request, FacultyTimeTable $facultyTimeTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultyTimeTable  $facultyTimeTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyTimeTable $facultyTimeTable)
    {
        //
    }
}

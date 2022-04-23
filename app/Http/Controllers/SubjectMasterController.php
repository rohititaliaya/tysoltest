<?php

namespace App\Http\Controllers;

use App\Models\SubjectMaster;
use App\Http\Requests\StoreSubjectMasterRequest;
use App\Http\Requests\UpdateSubjectMasterRequest;
use Request;
use App\Models\Term;
class SubjectMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSubjectMasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectMasterRequest $request)
    {
        $sm = new SubjectMaster();
        $sm->subject_name = $request->sname;
        $sm->term_id = $request->sterm;
        $sm->save();

        $subjects = SubjectMaster::all();
        $terms = Term::all();
        return view('welcome', compact('subjects', 'terms'))->with(['message'=>"saved"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SubjectMaster $subjectMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(SubjectMaster $subjectMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubjectMasterRequest  $request
     * @param  \App\Models\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectMasterRequest $request, SubjectMaster $subjectMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubjectMaster $subjectMaster)
    {
        //
    }
}

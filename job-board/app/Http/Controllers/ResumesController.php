<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resumes = Resume::orderBy('created_at', 'desc');
        return view('pages.browse-resume')->with('resumes', $resumes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.resume');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'professionalTitle' => 'required',
            'category' => 'required',
            'aboutNote' => 'required',
            'picture' => 'file|required|max:4999',
            'phone' =>'required',
            'location' => 'required',
            'dob' => 'required',
            'region' => 'required',
            'fbLink' => 'required',
            'gLink' => 'required',
            'twLink' => 'required',
            'igLink' => 'required',
            'lnLink' => 'required',
            'resumeContent' => 'required',
            'schoolName' => 'required',
            'qualification' => 'required',
            'dateFrom' => 'required',
            'dateTo' => 'required',
            'notes' => 'required',
            'employer' => 'required',
            'position' => 'required',
            'dateFromEx' => 'required',
            'dateToEx' => 'required',
            'notesSecond' => 'required',
            'skill' => 'required',
            'percent' => 'required',
        ]);
        
            //    Handle File Upload               
               if($request->hasFile('picture')){
                // Get filename with the extension
                $filenameWithExt = $request->file('picture')->getClientOriginalName();
                // Get just filename
                 $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('picture')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload the File
                $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);
            }else{
                $fileNameToStore = 'noimage.jpg';
               };

        // Add Resume
        $resume = new Resume;
        $resume->name = $request->input('name');
        $resume->email = $request->input('email');
        $resume->professionalTitle = $request->input('professionalTitle');
        $resume->category = $request->input('category');
        $resume->aboutNote = $request->input('aboutNote');
        $resume->picture = $fileNameToStore;
        $resume->phone = $request->input('phone');
        $resume->location = $request->input('location');
        $resume->dob = $request->input('dob');
        $resume->region = $request->input('region');
        $resume->fbLink = $request->input('fbLink');
        $resume->gLink = $request->input('gLink');
        $resume->twLink = $request->input('twLink');
        $resume->igLink = $request->input('igLink');
        $resume->lnLink = $request->input('lnLink');
        $resume->resumeContent = $request->input('resumeContent');
        $resume->schoolName = $request->input('schoolName');
        $resume->qualification = $request->input('qualification');
        $resume->dateFrom = $request->input('dateFrom');
        $resume->dateTo = $request->input('dateTo');
        $resume->notes = $request->input('notes');
        $resume->employer = $request->input('employer');
        $resume->position = $request->input('position');
        $resume->dateFromEx = $request->input('dateFromEx');
        $resume->dateToEx = $request->input('dateToEx');
        $resume->notesSecond = $request->input('notesSecond');
        $resume->skill = $request->input('skill');
        $resume->percent = $request->input('percent');
        $resume->save();
         
       return redirect('/')->with('success', 'Resume Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resume =  Resume::find($id);
        return view('pages.candidate-details')->with('resume', $resume);
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

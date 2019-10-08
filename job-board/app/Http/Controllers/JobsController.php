<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Job;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $jobs = Job::orderBy('created_at', 'desc')->paginate(5);
        return view('pages.browse-jobs')->with('jobs', $jobs);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
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
            'jobTitle' => 'required',
            'emailAddress' => 'required',
            'jobType' => 'required',
            'location' => 'required',
            'jobDescription' => 'required',
            'companyName' => 'required',
            'companyTagline' => 'required',
            'companyEmail' => 'required',
            'companyLocation' => 'required',
            'website' => 'required',
            'companyDob' => 'required',
            'facebookLink' => 'required',
            'googleLink' => 'required',
            'twitterLink' => 'required',
            'instagramLink' => 'required',
            'linkedinLink' => 'required',
            'dribbleLink' => 'required',
            'aboutCompany' => 'required',
            'coverImage' => 'file|required|max:1999',
        ]);

            //    Handle File Upload               
               if($request->hasFile('coverImage')){
                // Get filename with the extension
                $filenameWithExt = $request->file('coverImage')->getClientOriginalName();
                // Get just filename
                 $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just extension
                $extension = $request->file('coverImage')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                // Upload the File
                $path = $request->file('coverImage')->storeAs('public/coverImage', $fileNameToStore);
            }else{
                $fileNameToStore = 'noimage.jpg';
               };

        // Add Job
        $job = new Job;
        $job->jobTitle = $request->input('jobTitle');
        $job->emailAddress = $request->input('emailAddress');
        $job->jobType = $request->input('jobType');
        $job->location = $request->input('location');
        $job->jobDescription = $request->input('jobDescription');
        $job->coverImage = $request->input('coverImage');
        $job->companyName = $request->input('companyName');
        $job->companyTagline = $request->input('companyTagline');
        $job->companyEmail = $request->input('companyEmail');
        $job->companyLocation = $request->input('companyLocation');
        $job->website = $request->input('website');
        $job->companyDob = $request->input('companyDob');
        $job->facebookLink = $request->input('facebookLink');
        $job->googleLink = $request->input('googleLink');
        $job->twitterLink = $request->input('twitterLink');
        $job->instagramLink = $request->input('instagramLink');
        $job->linkedinLink = $request->input('linkedinLink');
        $job->dribbleLink = $request->input('dribbleLink');
        $job->aboutCompany = $request->input('aboutCompany');
        $job->coverImage = $fileNameToStore;
        $job->user_id = auth()->user()->id;
        $job->save();

        return redirect('/')->with('success', 'Job Added Successfully');
    }

    public function search(Request $request){
        $searchName = $request->get('searchName');
        $searchLocation = $request->get('searchLocation');
        $jobs = Job::where('jobTitle', 'like', '%'.$searchName.'%')
                    ->where('location', 'like', '%'.$searchLocation.'%')
                    ->paginate(5);

        return view('pages.browse-jobs', ['jobs' => $jobs]);            
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job =  Job::find($id);
        return view('pages.show')->with('job', $job);
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

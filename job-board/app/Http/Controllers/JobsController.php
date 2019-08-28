<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('pages.jobs')->with('jobs', $jobs);
      
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
            'companyName' => 'required',
            'state' => 'required',
            'ministry' => 'required',
            'schedule' => 'required',
            'jobFunction' => 'required',
            'jobDescription' => 'required',
            // 'cvUpload' => 'file|required|max:1999',
        ]);

               // Handle File Upload
               //$uniqueFileName = uniqid() . $request->get('cvUpload')->getClientOriginalName() . '.' . $request->get('cvupload')->getClientOriginalExtension();

                //$request->get('cvUpload')->move(public_path('files') . $uniqueFileName);

                //return redirect()->back()->with('success', 'File uploaded successfully.');

                
            //    if($request->hasFile('cvUpload')){
            //     // Get filename with the extension
            //     $filenameWithExt = $request->file('cvUpload')->getClientOriginalName();
            //     // Get just filename
            //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //     // Get just extension
            //     $extension = $request->file('cvUpload')->getClientOriginalExtension();
            //     // Filename to store
            //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //     // Upload the File
            //     $path = $request->file('cvUpload')->storeAs('public/cvUpload', $fileNameToStore);
            // }else{
            //     $fileNameToStore = 'noimage.jpg';
            //    };

        // Add Job
        $job = new Job;
        $job->jobTitle = $request->input('jobTitle');
        $job->companyName = $request->input('companyName');
        $job->state = $request->input('state');
        $job->schedule = $request->input('schedule');
        $job->ministry = $request->input('ministry');
        $job->jobFunction = $request->input('jobFunction');
        $job->jobDescription = $request->input('jobDescription');
        // $job->cvUpload = $fileNameToStore;
        $job->save();

        return redirect('/jobs')->with('success', 'Job Added Successfully');
    }

    public function search(Request $request){
        $searchName = $request->get('searchName');
        $searchLocation = $request->get('searchLocation');
        $jobs = Job::where('jobTitle', 'like', '%'.$searchName.'%')
                    ->where('state', 'like', '%'.$searchLocation.'%')
                    ->paginate(5);

        return view('pages.result', ['jobs' => $jobs]);            
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
        return view('pages.result')->with('job', $job);
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

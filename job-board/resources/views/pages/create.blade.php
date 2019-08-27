@extends('layouts.app')

@section('content')
    <h1>Add Job</h1>
    <form method="POST" action="{{action('JobsController@store')}}" enctype="multipart/form-data" name="data">
        <input name="_method" type="hidden" value="POST">
    
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" id="jobTitle" name="jobTitle" value="{{ old('jobTitle') }}" placeholder="Job Title">
            </div>
            <div class="form-group col-md-6">
                <label for="companyName">Company Name</label>
                <input type="text" class="form-control" id="companyName" name="companyName" value="{{ old('companyName') }}" placeholder="Company Name">
            </div>
          </div>
          <div class="form-row">
             <div class="form-group col-md-6">
                 <label for="state">State</label>
                 <select id="state" name="state" class="custom-select" value="{{ old('state') }}">
                    <option selected>Bayelsa</option>
                    <option>Rivers</option>
                    <option>Lagos</option>
                    <option>Calabar</option>
                    <option>Benin</option>
              </select>
              </div>
              <div class="form-group col-md-6">
                  <label for="ministry">Ministry</label>
                  <input type="text" class="form-control" id="ministry" name="ministry" value="{{ old('ministry') }}" placeholder="Enter Ministry">    
               </div>
    
          </div>
          <div class="form-group">
            <label for="schedule">Schedule</label>
            <select id="schedule" name="schedule" value="{{ old('schedule') }}" class="custom-select">
                  <option selected>Full-Time</option>
                  <option>Part-Time</option>
            </select>
          </div>
          <div class="form-group">
            <label for="jobFunction">Job Function</label>
            <input type="text" class="form-control" name="jobFunction" id="jobFunction" value="{{ old('jobFunction') }}" placeholder="State Job Function">
          </div> 
          <div class="form-group">
                  <label for="jobDescription">Job Descriptions</label>
                  <textarea class="form-control" name="jobDescription" value="{{ old('jobDescription') }}" placeholder="Enter Job Descriptions" id="jobDescription">
                  </textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button> 
          {{csrf_field()}}
        </form>
@endsection
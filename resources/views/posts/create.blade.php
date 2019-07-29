@extends('layouts.app')

@section('content')
<h1>Add Receipt</h1>
<form method="POST" action="{{action('PostsController@store')}}" enctype="multipart/form-data" name="data">
    <input name="_method" type="hidden" value="POST">

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="customerName">Customer Name</label>
          <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Customer Name" required>
        </div>
        <div class="form-group col-md-6">
              <label for="bank">Bank</label>
              <select id="bank" class="custom-select" name="bank" aria-placeholder="Select">
                <option>GT Bank</option>
                <option>FCMB</option>
                <option>First Bank</option>
                <option>Stanbic IBTC</option>
                <option>Access Bank</option>
                <option>UBA</option>
              </select>
        </div>
      </div>
      <div class="form-row">
         <div class="form-group col-md-6">
             <label for="transactionDate">Transaction Date</label>
             <input type="date" class="form-control" id="transactionDate" name="transactionDate" required>    
          </div>
          <div class="form-group col-md-6">
              <label for="transactionId">Transaction ID</label>
              <input type="text" class="form-control" id="transactionId" name="transactionId" required>    
           </div>

      </div>
      <div class="form-group">
        <label for="terminalLocation">Terminal Location</label>
        <select id="terminalLocation" name="terminalLocation" class="custom-select">
              <option selected>OKUTUKUTU</option>
              <option>YENEGWE</option>
              <option>KPANSIA</option>
              <option>OBUNNA</option>
              <option>SWALI</option>
        </select>
      </div>
      <div class="form-group">
        <label for="cardNumber">Card Number</label>
        <input type="number" size="25" class="form-control" name="cardNumber" id="cardNumber" placeholder="Enter Card Number" required>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="amount">Amount</label>
          <input type="number" min="1" class="form-control" name="amount" id="amount" required>
        </div>
        <div class="form-group col-md-6">
          <label for="dateRecorded">Date of Recording</label>
          <input type="date" class="form-control" id="dateRecorded" name="dateRecorded" required>    
        </div>
      </div>
      <div class="form-group">
        <label for="actionTaken">Action Taken</label>
        <select id="actionTaken" name="actionTaken" class="custom-select">
              <option selected>Product Released</option>
              <option>Product Not Released</option>
        </select>
      </div>
      <div class="form-group">
              <label for="remark">Remarks</label>
              <textarea class="form-control" name="remark" placeholder="Enter Remarks" id="remark" required>
              </textarea>
      </div>
      <div class="form-group d-flex flex-column">
        <label for="fileUpload">File Upload</label>
        <input type="file" name="fileUpload" id="fileUpload"> 
      </div>
      <button type="submit" class="btn btn-primary">Submit</button> 
      {{csrf_field()}}
    </form>
@endsection
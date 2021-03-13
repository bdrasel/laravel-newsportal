@extends('admin.admin_master')
@section('title','User Profile')
@section('content')        

<div class="content-wrapper">
<div class="row">
  <div class="col-1"></div>
    <div class="col-10 grid-margin stretch-card">
      <div class="card corona-gradient-card">
        <div class="card-body py-0 px-0 px-sm-3">
          <div class="row align-items-center">
            <div class="col-4 col-sm-3 col-xl-2">
              <img src="{{ asset('contents/admin') }}/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
            </div>
            <div class="col-5 col-sm-7 col-xl-8 p-0">
              <h4 class="mb-1 mb-sm-0">Welcome to bd news?</h4>
            </div>
            <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
              <span>
                <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">visit Website?</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-10 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
             <div class="row">
               <div class="col-md-6"> <h3 class="card-title"> User Profile Information</h3></div>
             </div>

           <div class="card" style="width: 18rem;">
            <img width="200" height="250" class="card-img-top" src="{{ (!empty($editData->image)) ? url('uploads/user/'.$editData->image) : url('uploads/avatar.png') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">User Name: {{ $editData->name }}</p>
              <p class="card-text">User Email: {{ $editData->email }}</p>
              <p class="card-text">User Mobile: {{ $editData->mobile }}</p>
              <p class="card-text">User Address: {{ $editData->address }}</p>
              <p class="card-text">User Gender: {{ $editData->gender }}</p>
              <p class="card-text">User Position: {{ $editData->position }}</p>
              <a href="{{ route('user.account.edit') }}" class="btn btn-info">Edit User Profile</a>
            </div>
          </div>

          </div>
       </div>
    </div>
  </div>
     
</div>

@endsection
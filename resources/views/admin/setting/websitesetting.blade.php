@extends('admin.admin_master')
@section('title','update Seo Setting')
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
               <div class="col-md-6"> <h3 class="card-title"> Update Website Setting</h3></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('update.website',$websitesetting->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1"> Website Logo </label>
                  <input type="file" name="logo" class="form-control file-upload-info" placeholder="Upload Logo">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1"></label>
                  <img src="{{ URL::to($websitesetting->logo) }}" style="width: 70px"; height="50px" alt="image">
                  <input type="hidden" name="oldLogo" value="{{ $websitesetting->logo }}" >
                </div>
              </div>

              <div class="form-group">
                <label>Phone English</label>
                <input type="text" class="form-control" name="phone_en" value="{{ $websitesetting->phone_en }}">
              </div>
              <div class="form-group">
                <label>Phone Hindi</label>
                <input type="text" class="form-control" name="phone_hindi" value="{{ $websitesetting->phone_hindi }}">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ $websitesetting->email }}">
              </div>
              <div class="form-group">
                <label>Address English</label>
                <textarea class="form-control" name="address_en" id="summernote" rows="4">{{ $websitesetting->address_en }}</textarea>
              </div>
              <div class="form-group">
                <label>Address Hindi</label>
                 <textarea class="form-control" name="address_hindi" id="summernote1" rows="4">{{ $websitesetting->address_hindi }}</textarea>
              </div>
         
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
          </div>
       </div>
    </div>
  </div>
    
</div>

@endsection
@extends('admin.admin_master')
@section('title','Add Website Link')
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
               <div class="col-md-6"> <h3 class="card-title"> Add Website Link</h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('all.website') }}">All Website Link</a></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('store.website') }}">
              @csrf
              <div class="form-group">
                <label>Website Name</label>
                <input type="text" class="form-control" name="website_name" placeholder="Website Name">
                @error('website_name')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Website Link</label>
                <input type="text" class="form-control" name="website_link" placeholder="Website Link">
                @error('website_link')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
       </div>
    </div>
  </div>
     
</div>



@endsection
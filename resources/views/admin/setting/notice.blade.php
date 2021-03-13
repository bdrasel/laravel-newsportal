@extends('admin.admin_master')
@section('title','update Notice Setting')
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
               <div class="col-md-6"> <h3 class="card-title"> Update Live Tv Setting</h3></div>

               @if($notice->status == 1)
               <div class="col-md-6 text-right"> <a class="btn btn-danger py-2" href="{{ route('notice.deactive',$notice->id) }}">Deactive</a>
                <p class="text-danger">Now Live Tv Are Active</p>
               </div>
               @else
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('notice.active',$notice->id) }}">Active</a>
                <p class="text-info py-2">Now Live Tv Are Deactive</p>
               </div>
               @endif

           </div>
            <form method="POST" class="forms-sample" action="{{ route('update.notice',$notice->id) }}">
              @csrf
             
              <div class="form-group">
                <label>Notice</label>
                <textarea class="form-control" name="notice" id="summernote" rows="4">{{ $notice->notice }}</textarea>
                @error('notice')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
          </div>
       </div>
    </div>
  </div>
    
</div>

@endsection
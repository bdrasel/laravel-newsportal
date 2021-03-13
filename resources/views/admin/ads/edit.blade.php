@extends('admin.admin_master')
@section('title','create Ads')
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
               <div class="col-md-6"> <h3 class="card-title"> Add Ads Information</h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('list.ads') }}">All Ads</a></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('update.ads',$row->id) }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>Ads Link</label>
                <input type="text" class="form-control" name="link" value="{{ $row->link }}">
                @error('link')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
               <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1"> Ads Image</label>
                  <input type="file" name="ads" class="form-control file-upload-info" placeholder="Upload Image">
                </div>
                <div class="form-group col-md-6">
                  <img src="{{ URL::to($row->ads) }}" style="width: 80px; height: 60px; margin-top: 10px" alt="photo">
                  <input type="hidden" name="oldimage" value="{{ $row->ads }}" >
                </div>
              </div>
              </div>
              <div class="form-group">
                  <label for="exampleInputName1">Type</label>
                  <select class="form-control" name="type">
                    <option value="1" {{ $row->type == 1 ? 'selected':'' }}>Vertical</option>
                    <option value="2" {{ $row->type == 2 ? 'selected':'' }}>Horizontal</option>
                  </select>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
          </div>
       </div>
    </div>
  </div>
     
</div>

@endsection
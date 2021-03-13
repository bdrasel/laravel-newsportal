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
               <div class="col-md-6"> <h3 class="card-title"> Update Seo Setting</h3></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('update.seo',$seo->id) }}">
              @csrf
              <div class="form-group">
                <label>Meta Author</label>
                <input type="text" class="form-control" name="meta_author" value="{{ $seo->meta_author }}">
                @error('meta_author')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Meta Title</label>
                <input type="text" class="form-control" name="meta_title" value="{{ $seo->meta_title }}">
                @error('meta_title')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Meta Keyword</label>
                <input type="text" class="form-control" name="meta_keyword" value="{{ $seo->meta_keyword }}">
                @error('meta_keyword')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Meta Description</label>
                <textarea class="form-control" name="meta_description" id="summernote" rows="4">{{ $seo->meta_description }}</textarea>
                @error('meta_description')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Google Analytics</label>
                 <textarea class="form-control" name="google_analytics" id="summernote" rows="4">{{ $seo->google_analytics }}</textarea>
                @error('instagram')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
               <div class="form-group">
                <label>Google Verification</label>
                <input type="text" class="form-control" name="google_verification" value="{{ $seo->google_verification }}">
                @error('google_verification')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Alexa Analytics</label>
                 <textarea class="form-control" name="alexa_analytics" id="summernote" rows="4">{{ $seo->alexa_analytics }}</textarea>
                @error('alexa_analytics')
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
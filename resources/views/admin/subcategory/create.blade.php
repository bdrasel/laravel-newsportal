@extends('admin.admin_master')
@section('title','add subcategory')
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
               <div class="col-md-6"> <h3 class="card-title"> Add subcategory</h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('subcategories.index') }}">All subcategory</a></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('subcategories.store') }}">
              @csrf
              <div class="form-group">
                <label>Subcategory English</label>
                <input type="text" class="form-control" name="subcategory_en" placeholder="Subcategory English">
                @error('subcategory_en')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Subcategory Hindi</label>
                <input type="text" class="form-control" name="subcategory_hindi" placeholder="Subcategory Hindi">
                @error('subcategory_hindi')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
               <div class="form-group">
                  <label class="">Category</label>
                    <select class="form-control" name="category_id">
                      <option disabled="" selected="">Select Category</option>
                      @foreach($categories as $category)
                      <option value={{ $category->id }}>{{ $category->category_en }} | {{ $category->category_hindi }} </option>
                      @endforeach
                   </select>
                  @error('category_id')
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
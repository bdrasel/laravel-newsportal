@extends('admin.admin_master')
@section('title','update subdistrict')
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
               <div class="col-md-6"> <h3 class="card-title"> Update subdistrict</h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('subdistracts.index') }}">All subdistrict</a></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('subdistracts.update',$subdistrict->id) }}">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label>Subcategory English</label>
                <input type="text" class="form-control" name="subdistrict_en" value="{{ $subdistrict->subdistrict_en }}"  placeholder="Subcategory English">
                @error('subdistrict_en')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Subcategory Hindi</label>
                <input type="text" class="form-control" name="subdistrict_hindi" value="{{ $subdistrict->subdistrict_hindi }}"  placeholder="Subcategory Hindi">
                @error('subdistrict_hindi')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
               <div class="form-group">
                  <label class="">District</label>
                    <select class="form-control" name="district_id">
                      <option disabled="" selected="">Select District</option>
                      @foreach($districts as $district)
                      <option value={{ $district->id }}
                        <?php if($district->id == $subdistrict->district_id ) echo 'selected' ?>

                        >{{ $district->district_en }}</option>
                      @endforeach
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
@extends('admin.admin_master')
@section('title','Update User Profile')
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
               <div class="col-md-6"> <h3 class="card-title"> Update User Profile Information</h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('user.account') }}">User Account</a></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control" value="{{ $editData->name }}" name="name" placeholder="Name">
              </div>

               <div class="form-group">
                <label>User Email</label>
                <input type="text" class="form-control" value="{{ $editData->email }}" name="email" placeholder="Email">
              </div>

              <div class="form-group">
                <label>User Mobile</label>
                <input type="text" class="form-control" value="{{ $editData->mobile }}" name="mobile" placeholder="Mobile">
              </div>

               <div class="form-group">
                <label>User Address</label>
                <input type="text" class="form-control" value="{{ $editData->address }}" name="address" placeholder="Address">
              </div>

               <div class="form-group">
                <label>User Position</label>
                <input type="text" class="form-control" value="{{ $editData->position }}" name="position" placeholder="Position">
              </div>

                <div class="form-group">
                  <label for="exampleInputName1">Gender</label>
                  <select class="form-control" name="gender">
                    <option disabled="" selected="" value="">Select Gneder</option>
                    <option {{ $editData->gender == 'male' ? 'selected':'' }} value="male">Male</option>
                    <option {{ $editData->gender == 'female' ? 'selected':'' }} value="female">Female</option>
                  </select>
                </div>

                <div class="row">
                   <div class="col-md-6">
                      <div class="form-group">
                        <label>User Profile Image </label>
                        <div class="input-group col-xs-12">
                          <input id="iamge" type="file" name="image" class="form-control file-upload-info" placeholder="Upload Photo">
          
                        </div>
                      </div>
                   </div>
                   <div class="col-md-6">
                    <div class="form-group">
                        <div class="input-group col-xs-12">
                          <img id="showImage" class="mt-2" width="70" src="{{ (!empty($editData->image)) ? url('uploads/user/'.$editData->image) : url('uploads/avatar.png') }}" alt="">
                  
                        </div>
                      </div>
                   </div>
                </div>
               
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>
          </div>
       </div>
    </div>
  </div>
     
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReder();
      reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files[0]);

    });


  });




</script>


@endsection
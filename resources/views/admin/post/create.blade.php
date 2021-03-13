@extends('admin.admin_master')
@section('title','add post')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')        

<div class="content-wrapper">
<div class="row">
    <div class="col-12 grid-margin stretch-card">
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

    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
             <div class="row">
               <div class="col-md-6"> <h3 class="card-title">Create Post Information</h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('posts.index') }}">All Post</a></div>
           </div>
            <form class="forms-sample" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Title English</label>
                  <input type="text" class="form-control" name="title_en">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Title Hindi</label>
                  <input type="text" class="form-control" name="title_hindi">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Category</label>
                  <select class="form-control" name="category_id" id="category_id">
                    <option disabled="" selected="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_en }} | {{ $category->category_hindi
                     }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Subcategory</label>
                  <select class="form-control" name="subcategory_id" id="subcategory_id">
                    <option disabled="" selected="">Select Subcategory</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">District</label>
                  <select class="form-control" name="district_id" id="district_id">
                    <option disabled="" selected="">Select District</option>
                    @foreach($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->district_en }} | {{ $district->district_hindi
                     }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">SubDistrict</label>
                  <select class="form-control" name="subdistrict_id" id="subdistrict_id">
                    <option disabled="" selected="">Select SubDistrict</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label>Image upload</label>
                <div class="input-group col-xs-12">
                  <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
  
                </div>
              </div>

               <div class="row">
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Tags English</label>
                  <input type="text" class="form-control" name="tags_en">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Tags Hindi</label>
                  <input type="text" class="form-control" name="tags_hindi">
                </div>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Details English</label>
                <textarea class="form-control" name="details_en" id="summernote" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleTextarea1">Details Hindi</label>
                <textarea class="form-control" name="details_hindi" id="summernote1" rows="4"></textarea>
              </div>

              <hr>
              <h3 class="text-center">Extra Options</h3>
              <br>

              <div class="row">
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                    <input type="checkbox" name="heeadline" class="form-check-input" value="1"> Headline <i class="input-helper"></i></label>
                </div>
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                    <input type="checkbox" name="bigthumbnail" class="form-check-input" value="1"> General Big Thumbnail <i class="input-helper"></i></label>
                </div>
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                    <input type="checkbox" name="first_section" class="form-check-input" value="1"> First Section <i class="input-helper"></i></label>
                </div>
                <div class="form-check col-md-3">
                    <label class="form-check-label">
                    <input type="checkbox" name="first_section_thumbnail" class="form-check-input" value="1"> First Section Big Thumbnail <i class="input-helper"></i></label>
                </div>
              </div>
              <br><br>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
        </div>
    </div>

</div>

<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="category_id"]').on('change', function(){
             var category_id = $(this).val();
             if(category_id) {
                 $.ajax({
                     url: "{{  url('/get/subcategory/') }}/"+category_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subcategory_id").empty();
                              $.each(data,function(key,value){
                                  $("#subcategory_id").append('<option value="'+value.id+'">'+value.subcategory_en+'</option>');
                              });


                        },
                    
                 });
             } else {
                 alert('danger');
             }
         });
     });
</script>

<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="district_id"]').on('change', function(){
             var district_id = $(this).val();
             if(district_id) {
                 $.ajax({
                     url: "{{  url('/get/subdistrict/') }}/"+district_id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        $("#subdistrict_id").empty();
                              $.each(data,function(key,value){
                                  $("#subdistrict_id").append('<option value="'+value.id+'">'+value.subdistrict_en+'</option>');
                              });


                        },
                    
                 });
             } else {
                 alert('danger');
             }
         });
     });
</script>



@endsection
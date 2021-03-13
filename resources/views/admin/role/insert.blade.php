@extends('admin.admin_master')
@section('title','Add User Role')
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
               <div class="col-md-6"> <h3 class="card-title"> Add User Role </h3></div>
               <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('user.index') }}">All User</a></div>
           </div>
            <form method="POST" class="forms-sample" action="{{ route('store.user') }}">
              @csrf
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
                @error('name')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
                @error('email')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                @error('password')
                  <div class="invalid-feedback"> 
                    <strong><span>{{ $message }}</span></strong>
                  </div>
                @enderror
              </div>

              <div class="row">
                        <div class="col-md-6">

                          <div class="form-group">
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="category" value="1"> Category <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="district" value="1"> District <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="post" value="1"> Post <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-danger">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="setting" value="1"> Setting <i class="input-helper"></i></label>
                            </div>
                            
                          </div>

                        </div>

                        <div class="col-md-6">
                          <div class="form-group">
                            <div class="form-check form-check-warning">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="website" value="1"> Website <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-primary">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="gallery" value="1"> Gallery <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-success">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="ads" value="1"> Advertisement <i class="input-helper"></i></label>
                            </div>
                            <div class="form-check form-check-info">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="role" value="1"> Role <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>




              <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
          </div>
       </div>
    </div>
  </div>
     

 
</div>



@endsection
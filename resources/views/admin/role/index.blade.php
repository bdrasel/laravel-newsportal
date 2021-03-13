 @extends('admin.admin_master')
 @section('title','All User Information')
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

 <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
       <div class="row">
         <div class="col-md-6"> <h3 class="card-title">All User Information</h3></div>
         <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('add.user') }}">Add User</a></div>
       </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Name </th>
                <th> User Role </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
              @php($i = 1)
              @foreach($allUser as $row)
                <tr>
                  <td> {{ $i++ }} </td>
                  <td> {{ $row->name }} </td>
                  <td> 
                      @if($row->category == 1)
                      <span class="badge badge-success">Category</span>
                      @else
                      @endif

                      @if($row->district == 1)
                      <span class="badge badge-info">District</span>
                      @else
                      @endif

                      @if($row->post == 1)
                      <span class="badge badge-danger">Post</span>
                      @else
                      @endif

                      @if($row->setting == 1)
                      <span class="badge badge-primary">Setting</span>
                      @else
                      @endif

                      @if($row->website == 1)
                      <span class="badge badge-light">Website</span>
                      @else
                      @endif

                      @if($row->gallery == 1)
                      <span class="badge badge-warning">Gallery</span>
                      @else
                      @endif

                      @if($row->ads == 1)
                      <span class="badge badge-dark">Ads</span>
                      @else
                      @endif

                      @if($row->role == 1)
                      <span class="badge badge-info">Role</span>
                      @else
                      @endif


                  </td>
                  <td>
                      <a class="btn btn-warning" href="{{ route('user.edit',$row->id) }}">edit</a>
                      <a class="btn btn-danger" onclick="return confirm('are you sure want to delete')" href="{{ route('delete.category',$row->id) }}">delete</i></a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        {{-- {{ $allUser->links('pagination-links') }} --}}
      </div>
    </div>
</div>
</div>
@endsection
 @extends('admin.admin_master')
 @section('title','Subdistrict Information')
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
         <div class="col-md-6"> <h3 class="card-title">SubDistrict Information</h3></div>
         <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('subdistracts.create') }}">Add Subdistrict</a></div>
       </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Subdistrict English </th>
                <th> Subdistrict Hindi </th>
                <th> District Name </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

              @foreach($subdistricts as $subdistrict)
                <tr>
                  <td> {{ $subdistricts->firstItem()+$loop->index }} </td>
                  <td> {{ $subdistrict->subdistrict_en }} </td>
                  <td> {{ $subdistrict->subdistrict_hindi }} </td>
                  <td> {{ $subdistrict->district_en }} | {{ $subdistrict->district_hindi }} </td>
                  <td>
                      <a class="btn btn-warning" href="{{ route('subdistracts.edit',$subdistrict->id) }}">edit</a>
                      <form method="POST" action="{{ route('subdistracts.destroy',$subdistrict->id) }}" style="display: inline-block;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure want to delete')">delete</button>
                      </form>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        {{ $subdistricts->links('pagination-links') }}
      </div>
    </div>
</div>
</div>
@endsection
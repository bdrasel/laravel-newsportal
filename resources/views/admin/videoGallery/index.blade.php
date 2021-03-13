@extends('admin.admin_master')
@section('title','Video Gallery')
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
         <div class="col-md-6"> <h3 class="card-title">Add Video Gallery</h3></div>
         <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('videos.create') }}">Add Video Gallery</a></div>
       </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Video Title </th>
                <th> Type </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

              @foreach($videos as $video)
                <tr>
                  <td> {{ $videos->firstItem()+$loop->index }} </td>
                  <td> {{ $video->title }} </td>
                  
                  <td>
                    @if($video->type == 1)
                      <span class="badge badge-success">Big Video</span>
                    @else
                       <span class="badge badge-info">Small Video</span>
                    @endif
                  </td>

                  <td>
                      <a class="btn btn-warning" href="{{ route('videos.edit',$video->id) }}">edit</a>
                      <form action="{{ route('videos.destroy',$video->id) }}" method="post" style="display: inline-block;">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure want to delete')">delete</button>
                      </form>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        {{ $videos->links('pagination-links') }}
      </div>
    </div>
</div>
</div>
@endsection
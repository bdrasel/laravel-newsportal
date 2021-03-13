@extends('admin.admin_master')
@section('title','Post Information')
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
         <div class="col-md-6"> <h3 class="card-title">Post Information</h3></div>
         <div class="col-md-6 text-right"> <a class="btn btn-info py-2" href="{{ route('posts.create') }}">Add Post</a></div>
       </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th> # </th>
                <th> Post Title</th>
                <th> Category </th>
                <th> Post District </th>
                <th> Image </th>
                <th> Post Date </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>

              @foreach($posts as $post)
                <tr>
                  <td> {{ $posts->firstItem()+$loop->index }} </td>
                  <td> {{ Str::limit($post->title_en,15) }} </td>
                  <td> {{ $post->category_en }} </td>
                  <td> {{ $post->district_en }} </td>
                  <td> <img src="{{ $post->image }}" style="width:60px; height: 60px" alt="image"> </td>
                  <td>{{ Carbon\Carbon::parse($post->post_date)->diffForHumans() }}</td>
                  <td>
                      <a class="btn btn-warning" href="{{ route('posts.edit',$post->id) }}">edit</a>
                      <form action="{{ route('posts.destroy',$post->id) }}" method="POST" style="display: inline-block;">
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
        {{ $posts->links('pagination-links') }}
      </div>
    </div>
</div>
</div>
@endsection
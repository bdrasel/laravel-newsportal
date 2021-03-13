@extends('website.home_master') 
@section('title','Newsproter') 
@section('content')
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-sm-8">
				<div class="row">
					<div class="col-md-1 col-sm-1 col-lg-1"></div>
					<div class="col-md-10 col-sm-10">
						<div class="lead-news">
							<div class="service-img">
								<a href="#">
									<img src="{{ asset($firstSectionBig->image) }}" width="800px" alt="Notebook">
								</a>
							</div>
							<div class="content">
								<h4 class="lead-heading-01"><a href="{{ URL::to('/view/post/'.$firstSectionBig->id) }}">
									    @if(Session()->get('lang') == 'english')
											{{ $firstSectionBig->title_en }}
										@else
											{{ $firstSectionBig->title_hindi }}
										@endif
								</a> </h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					
					@foreach($firstSection as $row)
					<div class="col-md-3 col-sm-3">
						<div class="top-news">
							<a href="{{ URL::to('/view/post/'.$row->id) }}">
								<img class="w-100" src="{{ asset($row->image) }}" alt="Notebook">
							</a>
							<h4 style="font-size: 15px;" class="heading-02">
								<a href="{{ URL::to('/view/post/'.$row->id) }}">
									 @if(Session()->get('lang') == 'english')
										{{ $row->title_en }}
									@else
										{{ $row->title_hindi }}
									@endif
						  		</a> 
						   </h4>
						</div>
					</div>
					@endforeach


				</div>
				<!-- add-start -->
				@php 
					$horizontal = DB::table('ads')->where('type',2)->skip(1)->first();
				@endphp
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="add">
							@if($horizontal == NULL)

							@else
							<a target="_blank" href="{{ $horizontal->link }}"><img src="{{ asset($horizontal->ads) }}" alt="" /></a>
							@endif
						</div>
					</div>
				</div>
				<!-- /.add-close -->
				<!-- news-start -->
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="bg-one">
							<div class="cetagory-title"><a href="#">
								{{ Session()->get('lang') == 'english' ? $firstCategory->category_en : $firstCategory->category_hindi }}
								
							 <span> 
							 	{{ Session()->get('lang') == 'english' ? 'More':'अधिक' }}
							 	<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="{{ URL::to('/view/post/'.$firstCatpostBig->id) }}">
											<img src="{{ asset($firstCatpostBig->image) }}" alt="Notebook">
										</a>
										<h4 class="heading-02"><a href="{{ URL::to('/view/post/'.$firstCatpostBig->id) }}">
											{{ Session()->get('lang') == 'english' ? $firstCatpostBig->title_en : $firstCatpostBig->title_hindi }}</a> 
										</h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									@foreach($firstCatpostSmall as $row)
									<div class="image-title">
										<a href="{{ URL::to('/view/post/'.$row->id) }}">
											<img src="{{ asset($row->image) }}" alt="Notebook">
										</a>
										<h4 class="heading-03">
										<a href="{{ URL::to('/view/post/'.$row->id) }}">
											{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> 
										</a> 
									  </h4>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6">
						<div class="bg-one">
							<div class="cetagory-title">
							 <a href="#">
								{{ Session()->get('lang') == 'english' ? $secondCategory->category_en : $secondCategory->category_hindi }}
								<span>{{ Session()->get('lang') == 'english' ? 'More':'अधिक' }} 
								<i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
							 </a>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="top-news">
										<a href="{{ URL::to('/view/post/'.$secondCatpostBig->id) }}">
											<img src="{{ asset($secondCatpostBig->image) }}" alt="Notebook">
										</a>
										<h4 class="heading-02">
										<a href="{{ URL::to('/view/post/'.$secondCatpostBig->id) }}">
											{{ Session()->get('lang') == 'english' ? $secondCatpostBig->title_en : $secondCatpostBig->title_hindi }}
										</a> 
									  </h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									@foreach($secondCatpostSmall as $row)
									<div class="image-title">
										<a href="{{ URL::to('/view/post/'.$row->id) }}">
											<img src="{{ asset($row->image) }}" alt="Notebook">
										</a>
										<h4 class="heading-03">
										<a href="{{ URL::to('/view/post/'.$row->id) }}">
											{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> 
										</a> 
									 </h4>
									</div>
									@endforeach

								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			@php 
				$vertical = DB::table('ads')->where('type',1)->first();
			@endphp
			<div class="col-md-3 col-sm-3">
				<!-- add-start -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="sidebar-add">
							@if($vertical == NULL)

							@else
							<a target="_blank" href="{{ $vertical->link }}"><img src="{{ asset($vertical->ads) }}" alt="" /></a>
					        @endif
						</div>
					</div>
				</div>
				<!-- /.add-close -->
				<!-- youtube-live-start -->

				@if($livetv->status == 1)
				<div class="cetagory-title-03">Live TV</div>
				<div class="photo">
					<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
					 	{!! $livetv->embed_code !!}
					</div>
				</div>
				@endif


				<!-- /.youtube-live-close -->
				<!-- facebook-page-start -->
				<div class="cetagory-title-03">Facebook</div>
				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=931991873945152&autoLogAppEvents=1" nonce="fkvyDOFT"></script>

				<div class="fb-page" data-href="https://www.facebook.com/rasel2208/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/rasel2208/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/rasel2208/">Web Village</a></blockquote></div>
				<!-- /.facebook-page-close -->
				<!-- add-start -->
				@php 
				   $vertical = DB::table('ads')->where('type',1)->skip(1)->first();
			    @endphp
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="sidebar-add">
							@if($vertical == NULL)

							@else
							<a target="_blank" href="{{ $vertical->link }}"><img src="{{ asset($vertical->ads) }}" alt="" /></a>
					        @endif
						</div>
					</div>
				</div>
				<!-- /.add-close -->
			</div>
		</div>
	</div>
</section>
<!-- /.1st-news-section-close -->
<!-- 2nd-news-section-start -->
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="#"> 
							{{ Session()->get('lang') == 'english' ? $threeCategory->category_en : $threeCategory->category_hindi }}
								

						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> <span>{{ Session()->get('lang') == 'english' ? 'All News':'सभी समाचार' }}  </span></a>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="{{ URL::to('/view/post/'.$threeCatpostBig->id) }}">
									<img src="{{ asset($threeCatpostBig->image) }}" alt="Notebook">
								</a>
								<h4 class="heading-02"><a href="{{ URL::to('/view/post/'.$threeCatpostBig->id) }}">
									{{ Session()->get('lang') == 'english' ? $threeCatpostBig->title_en : $threeCatpostBig->title_hindi }}
								</a> </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
					
						      @foreach($threeCatpostSmall as $row)
									<div class="image-title">
										<a href="{{ URL::to('/view/post/'.$row->id) }}">
											<img src="{{ asset($row->image) }}" alt="Notebook">
										</a>
										<h4 class="heading-03">
										<a href="{{ URL::to('/view/post/'.$row->id) }}">
											{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> 
										</a> 
									 </h4>
									</div>
								@endforeach
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="bg-one">
					<div class="cetagory-title-02"><a href="#">
						{{ Session()->get('lang') == 'english' ? $fourCategory->category_en : $fourCategory->category_hindi }} 
						<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>{{ Session()->get('lang') == 'english' ? 'All News':'सभी समाचार' }} </span></a>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="top-news">
								<a href="{{ URL::to('/view/post/'.$fourCatpostBig->id) }}">
									<img src="{{ asset($fourCatpostBig->image) }}" alt="Notebook">
								</a>
								<h4 class="heading-02"><a href="{{ URL::to('/view/post/'.$fourCatpostBig->id) }}">
									{{ Session()->get('lang') == 'english' ? $fourCatpostBig->title_en : $fourCatpostBig->title_hindi }}</a> </h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							
							 @foreach($fourCatpostSmall as $row)
								<div class="image-title">
									<a href="{{ URL::to('/view/post/'.$row->id) }}">
										<img src="{{ asset($row->image) }}" alt="Notebook">
									</a>
									<h4 class="heading-03">
									<a href="{{ URL::to('/view/post/'.$row->id) }}">
										{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> 
									</a> 
								 </h4>
								</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ******* -->
		<!-- add-start -->
		@php 
			$horizontal = DB::table('ads')->where('type',2)->skip(2)->first();
			$horizontalq = DB::table('ads')->where('type',2)->skip(3)->first();
		@endphp
		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="add">
					@if($horizontal == NULL)

					@else
					<a target="_blank" href="{{ $horizontal->link }}"><img src="{{ asset($horizontal->ads) }}" alt="" /></a>
					@endif
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="add">
					@if($horizontalq == NULL)

					@else
					<a target="_blank" href="{{ $horizontalq->link }}"><img src="{{ asset($horizontalq->ads) }}" alt="" /></a>
					@endif
				</div>
			</div>
		</div>
		<!-- /.add-close -->
	</div>
</section>
<!-- /.2nd-news-section-close -->
<!-- 3rd-news-section-start -->
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9 col-sm-9">
				<div class="cetagory-title-02"><a href="#">Feature  <i class="fa fa-angle-right" aria-hidden="true"></i> all district news tab here <span><i class="fa fa-plus" aria-hidden="true"></i> All News  </span></a>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="top-news">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-02"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-title">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="image-title">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
						<div class="image-title">
							<a href="#">
								<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
							</a>
							<h4 class="heading-03"><a href="#">Achieving SDG-4 during COVID-19 Pandemic</a> </h4>
						</div>
					</div>
				</div>
				<!-- ******* -->
				<br />
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="cetagory-title-02"><a href="#">Sci-Tech<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="bg-gray">
							<div class="top-news">
								<a href="#">
									<img src="{{ asset('contents/website') }}/assets/img/news.jpg" alt="Notebook">
								</a>
								<h4 class="heading-02"><a href="#">Facebook Messenger gets shiny new logo </a> </h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="news-title">	<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">	<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">	<a href="#">Facebook Messenger gets shiny new logo</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="news-title">	<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">	<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
						<div class="news-title">	<a href="#">Facebook Messenger gets shiny new logo </a>
						</div>
					</div>
				</div>
				<br><br>

				<div class="row">
					<div class="col-md-12 col-sm-12">
						@php
							$district = DB::table('distracts')->get();
						@endphp
						<div class="cetagory-title-02"><a href="#">Search By District<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>  </span></a>
						</div>
					</div>
					<form action="{{ route('search.district') }}" method="get">
						@csrf
							<div class="col-md-4 col-sm-4">
							  <select class="form-control" name="district_id" id="district_id">
			                    <option disabled="" selected="">Select District</option>
			                    @foreach($district as $row)
			                    <option value="{{ $row->id }}">{{ $row->district_en }} | {{ $row->district_hindi
			                     }}</option>
			                    @endforeach
			                  </select>
							</div>
							<div class="col-md-4 col-sm-4">
								<select class="form-control" name="subdistrict_id" id="subdistrict_id">
				                   <option disabled="" selected="">Select SubDistrict</option>
				                 </select>
							</div>
							<div class="col-md-4 col-sm-4">
								<button class="btn btn-success btn-block">Search</button>
							</div>
					</form>
				</div>

				<br><br>


				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="sidebar-add">
							<img src="{{ asset('contents/website') }}/assets/img/top-ad.jpg" alt="" />
						</div>
					</div>
				</div>
				<!-- /.add-close -->
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="tab-header">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
							{{ Session()->get('lang') == 'english' ? 'Latest' : 'नवीनतम' }}</a>
						</li>
						<li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
							{{ Session()->get('lang') == 'english' ? 'Popular' : 'लोकप्रिय' }}
						</a>
						</li>
						<li role="presentation"><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
							{{ Session()->get('lang') == 'english' ? 'Highest' : 'उच्चतम' }}
						  </a>
						</li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content ">
						<div role="tabpanel" class="tab-pane in active" id="tab21">
							<div class="news-titletab">
								@foreach($latest as $row)
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> </h4>
								</div>
								@endforeach
								
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab22">
							<div class="news-titletab">
								@foreach($favorite as $row)
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> </h4>
								</div>
								@endforeach
					
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tab23">
							<div class="news-titletab">
								@foreach($highest as $row)
								<div class="news-title-02">
									<h4 class="heading-03"><a href="#">{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> </h4>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
				<!-- Namaj Times -->
				<div class="cetagory-title-03">
					@if(Session()->get('lang') == 'english')
						Prayer Time
					@else
						प्रार्थना का समय
					@endif
					
				</div>
				<table class="table">
					<tr>
						<th>
							@if(Session()->get('lang') == 'english')
								Fajar
							@else
								फजर
							@endif
						</th>
						<td>{{ $prayer->fajar }}</td>
						
					</tr>
					<tr>
						<th>
							@if(Session()->get('lang') == 'english')
								Jahor
							@else
								जहोर
							@endif
						</th>
						<td>{{ $prayer->jahor }}</td>
						
					</tr>
					<tr>
						<th>
							@if(Session()->get('lang') == 'english')
								Asar
							@else
								असर
							@endif
						</th>
						<td>{{ $prayer->asar }}</td>
						
					</tr>
					<tr>
						<th>
							@if(Session()->get('lang') == 'english')
								Magrib
							@else
								मगरिब
							@endif
						</th>
						<td>{{ $prayer->magrib }}</td>
						
					</tr>
					<tr>
						<th>
							@if(Session()->get('lang') == 'english')
								Esha
							@else
								ईशा
							@endif
						</th>
						<td>{{ $prayer->esha }}</td>
						
					</tr>
					<tr>
						<th>
							@if(Session()->get('lang') == 'english')
								Zummah
							@else
								जुम्मा
							@endif
						</th>
						<td>{{ $prayer->zummah }}</td>
						
					</tr>
				</table>
				<!-- Namaj Times -->
				<div class="cetagory-title-03">Old News</div>
				<form action="" method="post">
					<div class="old-news-date">
						<input type="text" name="from" placeholder="From Date" required="">
						<input type="text" name="" placeholder="To Date">
					</div>
					<div class="old-date-button">
						<input type="submit" value="search ">
					</div>
				</form>
				<!-- news -->
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="cetagory-title-04">
					@if(Session()->get('lang') == 'english')
						Important Website
					@else
						महत्वपूर्ण वेबसाइट
					@endif
				</div>
				<div class="">
					@foreach($websites as $website)
					<div class="news-title-02">
						<h4 class="heading-03"><a target="_blank" href="{{ $website->website_link }}"><i class="fa fa-check" aria-hidden="true"></i> {{ $website->website_name }} </a> </h4>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.3rd-news-section-close -->
<!-- gallery-section-start -->
<section class="news-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-sm-7">
				<div class="gallery_cetagory-title">
					{{ Session()->get('lang') == 'english' ? 'Photo Gallery': 'चित्र प्रदर्शनी' }}
					
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-8">
						<div class="photo_screen">
							<div class="myPhotos" style="width:100%">
								<img src="{{ asset($photoGalleryBig->photo) }}" alt="Avatar">
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="photo_list_bg">
							@foreach($photoGallery as $row)
							<div class="photo_img photo_border active">
								<img src="{{ asset($row->photo) }}" />
								<div class="heading-03">{{ $row->title }}</div>
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
				<!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->
				<script>
					var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                      showDivs(slideIndex += n);
                    }

                    function currentDiv(n) {
                      showDivs(slideIndex = n);
                    }

                    function showDivs(n) {
                      var i;
                      var x = document.getElementsByClassName("myPhotos");
                      var dots = document.getElementsByClassName("demo");
                      if (n > x.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = x.length}
                      for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";
                      }
                      for (i = 0; i < dots.length; i++) {
                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                      }
                      x[slideIndex-1].style.display = "block";
                      dots[slideIndex-1].className += " w3-opacity-off";
                    }
               </script>
				<!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->
			</div>
			<div class="col-md-4 col-sm-5">
				<div class="gallery_cetagory-title">
					{{ Session()->get('lang') == 'english' ? 'Video Gallery': 'वीडियो गैलरी' }}</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="video_screen">
							<div class="myVideos" style="width:100%">
								<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
									<iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $videoGalleryBig->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="gallery_sec owl-carousel">
							@foreach($videoGallery as $row)
							<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
								<iframe width="853" height="480" src="https://www.youtube.com/embed/{{ $row->embed_code }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<div class="heading-03">
									<div class="content_padding">{{ $row->title }}</div>
								</div>
							</div>
							@endforeach
				
						</div>
					</div>
				</div>
				<script>
					var slideIndex = 1;
                    showDivss(slideIndex);

                    function plusDivs(n) {
                      showDivss(slideIndex += n);
                    }

                    function currentDivs(n) {
                      showDivss(slideIndex = n);
                    }

                    function showDivss(n) {
                      var i;
                      var x = document.getElementsByClassName("myVideos");
                      var dots = document.getElementsByClassName("demo");
                      if (n > x.length) {slideIndex = 1}
                      if (n < 1) {slideIndex = x.length}
                      for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";
                      }
                      for (i = 0; i < dots.length; i++) {
                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                      }
                      x[slideIndex-1].style.display = "block";
                      dots[slideIndex-1].className += " w3-opacity-off";
                    }
				</script>
			</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
         $('select[name="district_id"]').on('change', function(){
             var district_id = $(this).val();
             if(district_id) {
                 $.ajax({
                     url: "{{  url('/get/subdistrict/fronted/') }}/"+district_id,
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
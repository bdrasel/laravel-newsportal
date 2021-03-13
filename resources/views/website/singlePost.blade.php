@extends('website.home_master') 
@section('title','Single Post Newsproter') 
@section('content')

<section class="single-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a>
					</li>
					<li>
					<a href="#">{{ Session()->get('lang') == 'english' ? $post->category_en : $post->category_hindi }}</a>
					</li>
					<li><a href="#">{{ Session()->get('lang') == 'english' ? $post->subcategory_en : $post->subcategory_hindi }}</a>
					</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<header class="headline-header margin-bottom-10">
					<h1 class="headline">{{ Session()->get('lang') == 'english' ? $post->title_en : $post->title_hindi }}</h1>
				</header>
				<div class="article-info margin-bottom-20">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<ul class="list-inline">
								<li>{{ $post->name }}</li>
								<li><i class="fa fa-clock-o"></i>{{ $post->post_date }}</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 pull-right">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ******** -->
		<div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="single-news">
					<img src="{{ asset($post->image) }}" alt="dd" />
					<br><br>
					<div class="sharethis-inline-share-buttons"></div>
					<br>
					<h4 class="caption">{{ Session()->get('lang') == 'english' ? $post->title_en : $post->title_hindi }} </h4>
					<p> {!! Session()->get('lang') == 'english' ? $post->details_en : $post->details_hindi !!}</p>
				</div>
				<!-- ********* -->
				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=931991873945152&autoLogAppEvents=1" nonce="AYXT4yFD"></script>

				<div class="fb-like" data-href="https://developers.facebook.com/raselhossain012/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
				<br>
				<br>


				<div class="sharethis-inline-share-buttons"></div>
				<br>

				<div id="fb-root"></div>
				<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0&appId=931991873945152&autoLogAppEvents=1" nonce="96R6tvdE"></script>

				<div class="fb-comments" data-href="{{ Request::url() }}" data-width="" data-numposts="5"></div>

				<div class="row">
					<div class="col-md-12">
						<h2 class="heading">
							{{ Session()->get('lang') == 'english' ? 'Related News' : 'सम्बंधित खबर' }}
						</h2>
					</div>
					@forelse($related as $row)
					<div class="col-md-4 col-sm-4">
						<div class="top-news sng-border-btm">
							<a href="{{ URL::to('/view/post/'.$row->id) }}">
								<img src="{{ asset($row->image) }}" alt="Notebook">
							</a>
							<h4 class="heading-02"><a href="{{ URL::to('/view/post/'.$row->id) }}">{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a> </h4>
						</div>
					</div>
					@empty
					<p>no post</p>
					@endforelse
				
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				   @php 
				      $vertical = DB::table('ads')->where('type',1)->skip(1)->first();
			       @endphp
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
				<!-- add-start -->
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="sidebar-add">
							<img src="assets/img/add_01.jpg" alt="" />
						</div>
					</div>
				</div>
				<!-- /.add-close -->
			</div>
		</div>
	</div>
</section>

@endsection
@extends('website.home_master') 
@section('title','Search District Post') 
@section('content')
	<section class="single_page">						
		<div class="container-fluid">											
		<div class="row">
			<div class="col-md-12">
				<div class="single_info">
					<span>
						<a href="#"><i class="fa fa-home" aria-hidden="true"></i> /
						</a> District		
					</span>				    
				</div>
			</div>
			<div class="col-md-9 col-sm-8">						
				
				@foreach($categoryPost as $row)
				<div class="archive_post_sec_again">
					<div class="row">
						<div class="col-md-4 col-sm-5">
							<div class="archive_img_again">
								<a href="{{ URL::to('/view/post/'.$row->id) }}"><img src="{{ asset($row->image) }}" alt="Notebook"></a>
							</div>
						</div>
						<div class="col-md-8 col-sm-7">
							<div class="archive_padding_again">
								<div class="archive_heading_01">
									<a href="{{ URL::to('/view/post/'.$row->id) }}">{{ Session()->get('lang') == 'english' ? $row->title_en : $row->title_hindi }}</a>
								</div>
								<div class="archive_dtails">
									{!! Session()->get('lang') == 'english' ? Str::limit($row->details_en,250) : Str::limit($row->details_hindi,250) !!}
								</div>
								<div class="dtails_btn"><a href="{{ URL::to('/view/post/'.$row->id) }}">{{ Session()->get('lang') == 'english' ? 'Read More...' : 'अधिक पढ़ें...' }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach

				{{ $categoryPost->links() }}


	
			</div>
			<div class="col-md-3 col-sm-4">
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('contents/website') }}/assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
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
				<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->
			</div>			
		</div>
	</div>
</section>

@endsection
	
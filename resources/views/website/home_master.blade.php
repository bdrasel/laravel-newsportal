<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta name="keyword" content="{{ $seo->meta_keyword }}">
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="google-analytics" content="{{ $seo->google_analytics }}">
        <meta name="google-verification" content="{{ $seo->google_verification }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title','Online Newsporotal')</title>

        <link href="{{ asset('contents/website') }}/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('contents/website') }}/assets/css/menu.css" rel="stylesheet">
        <link href="{{ asset('contents/website') }}/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('contents/website') }}/assets/css/font-awesome.css" rel="stylesheet">
        <link href="{{ asset('contents/website') }}/assets/css/responsive.css" rel="stylesheet">
        <link href="{{ asset('contents/website') }}/assets/css/owl.carousel.min.css" rel="stylesheet">
        <link href="{{ asset('contents/website') }}/style.css" rel="stylesheet">
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6046db8ccaff460011c5895c&product=inline-share-buttons" async="async"></script>

    </head>
    <body>
		@include('website.includes.header')     

		@yield('content')
		
		@include('website.includes.footer')    
	

		<script src="{{ asset('contents/website') }}/assets/js/jquery.min.js"></script>
		<script src="{{ asset('contents/website') }}/assets/js/bootstrap.min.js"></script>
		<script src="{{ asset('contents/website') }}/assets/js/main.js"></script>
		<script src="{{ asset('contents/website') }}/assets/js/owl.carousel.min.js"></script>
	</body>
</html> 
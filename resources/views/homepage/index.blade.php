<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Infommer</title>
<link href="{{URL::asset('csss/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('jss/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{URL::asset('csss/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Express News Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="{{URL::asset('jss/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="{{URL::asset('jss/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<script type="text/javascript" src="{{URL::asset('jss/move-top.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('jss/easing.js')}}"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<!-- header-section-starts-here -->
	<div class="header">
		<div class="header-top">
			<div class="wrap">
				<div class="top-menu">
						<ul>
					  @if (Auth::guest())
						<li><a href="/auth/register" data-hover="Registration">Registration</a></li> 
											
						<li><a href="/auth/login" data-hover="Login">Login</a></li>
							@else
						
							<a href="#" ><li>{{ Auth::user()->username }}</li></a>
							
								<li><a href="/auth/logout">Logout</a></li>
						
						
					@endif
					{{-- 	<li><a href="index.html">Home</a></li> --}}
						<li><a href="about.html">About Us</a></li>
			{{-- 			<li><a href="privacy-policy.html">Privacy Policy</a></li>
						<li><a href="contact.html">Contact Us</a></li> --}}
					</ul>
				</div>
				<div class="num">
					<p> Call us : 032 2352 782</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<div class="header-bottom">
		<div>
		<style >
			#logo{
				background: #fff;
			}
		</style>
				<div class="logo text-cente" id="logo">
				<a href="index.html"><img src="{{URL::asset('images/logon.png')}}" alt="" /></a>
			</div>
</div>
			</div>
			<div class="navigation">
				<nav class="navbar navbar-default" role="navigation">
		   <div class="wrap">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<!--/.navbar-header-->
		
		@include('homepage.navbar')
			</div>
			<!--/.navbar-collapse-->
	 <!--/.navbar-->
			</div>
		</nav>
		</div>
	</div>
	</div>

	
	<!-- header-section-ends-here -->
	<div class="wrap">

		@include('homepage.news')
	</div>
	<!-- content-section-starts-here -->

	<div class="main-body">
<div class="col-md-2 share_grid">
				@include('homepage.side')
			</div>	
			<div class="col-md-6 content-left single-post">
			   @yield('content')
				</div>
			<div class="col-md-4 side-bar">
				@include('homepage.sidebar')
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	</div>
	<!-- content-section-ends-here -->
	<!-- footer-section-starts-here -->
	<div class="footer">

		@include('homepage.footer')
	</div>
	<!-- footer-section-ends-here -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				wrapID: 'toTop', // fading element id
				wrapHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
</body>
</html>
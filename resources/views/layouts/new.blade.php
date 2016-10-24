<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Soma254</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />	
	<script src="{{asset('js/jquery.min.js')}}"> </script>
<!--/script-->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
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
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
				  @if (Auth::guest())
						<li><a href="/auth/register" data-hover="Registration">Registration</a></li> 
											
						<li><a href="/auth/login" data-hover="Login">Login</a></li>
							@else
						
							<a href="#" ><li>{{ Auth::user()->username }}</li> </a>
							
								<li><a href="/auth/logout">Logout</a></li>
					@endif
					
					</ul>
					<div class="search-box">
					    <div class="b-search">
								<form>
										<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
										<input type="submit" value="">
								</form>
							</div>
						</div>

					<div class="clearfix"></div>
				</div>
       </div>
	<div class="full">
			<div class="col-md-3 top-nav sing-page">
				     <div class="logo">
						<a href="/"><h1>Soma 254</h1></a>
					</div>
					<div class="top-menu">
					 <span class="menu"> </span>

					<ul class="cl-effect-16">
					<ul class="tree-list-pad">
									
											<ul>
											<?php use App\Question;
$cate =Question::all(); ?>
												<li>
												<li>Top Topics</li>	
												  @foreach($cate as $brand)
<li><a href="#" value="{{$brand->id}}">{{ $brand->topic}}</a></li>
 @endforeach  								
												</li></ul></li>
										
									</ul>
						{{-- <li><a class="active" href="index.html" data-hover="HOME">Home</a></li> 
										
						<li><a href="about.html" data-hover="About">About</a></li>
						<li><a href="grid.html" data-hover="Grids">Grids</a></li>
						<li><a href="services.html" data-hover="Services">Services</a></li>
						<li><a href="gallery.html" data-hover="Gallery">Gallery</a></li>
						<li><a href="contact.html" data-hover="CONTACT">Contact</a></li> --}}
					</ul>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					<ul class="side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>
		<div class="col-md-9 main">
		<!--banner-section-->
		
		   @yield('content')
			
		
			<!--//banner-section-->
			
	    
		
	
	
	<div class="clearfix"> </div>
</div>	
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>
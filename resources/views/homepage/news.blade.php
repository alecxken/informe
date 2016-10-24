<div class="move-text">
			<div class="breaking_news">
				<h2>Trending Topics</h2>
			</div>
			<div class="marquee">

											<?php use App\Question;
// $cate =Question::all();
											// Question::latest()->get();
$cate =Question::latest()->limit(3)->offset(3)->get(); ?>
												
												
												  @foreach($cate as $brand)

				<div class="marquee1"><a class="breaking" href="single.html"{{$brand->id}}">>>{{ $brand->topic}}>></a></div> @endforeach  	
			
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<script type="text/javascript" src="{{URL::asset('jss/jquery.marquee.min.js')}}"></script>
			<script>
			  $('.marquee').marquee({ pauseOnHover: true });
			  //@ sourceURL=pen.js
			</script>
		</div>
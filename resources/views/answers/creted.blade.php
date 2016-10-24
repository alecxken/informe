@extends('homepage.index')

@section('content')
<div class="wrap">
		<ol class="breadcrumb">
			  <li><a href="">Home</a></li>
			  <li class="active">Questions</li>
			</ol>
			<div class="single-page">
			<div class="col-md-2 share_grid">
			{{-- 	@include('homepage.side') --}}
			</div>	
			<div class="col-md-6 content-left single-post">
				<div class="blog-posts">
			<h3 class="post">   {{ $question->title }}</h3>
			<h6 class="post"> <a href="">{{ $question->topic }}</a></h6>
				<div class="last-article">
					<p class="artext">{{ $question->question }}</p>
				 <p>By: {{ $question->user->username }}--When: 
{{ $question->created_at->diffForHumans() }} 
<a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a>
<a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $question->views }}</a>

</p>
					
					<!--related-posts-->
			{{-- 	<div class="row related-posts">
					<h4>Articles You May Like</h4>
					<div class="col-xs-6 col-md-3 related-grids">
						<a href="single.html" class="thumbnail">
							<img src="images/f2.jpg" alt=""/>
						</a>
						<h5><a href="single.html">Lorem Ipsum is simply</a></h5>
					</div>	
								
				</div> --}}
				<!--//related-posts-->

				<div class="coment-form">
					<div class="coment-form">
					<h4>Answer</h4>
					  @include('errors.list')

                            {!! Form::open(['action' => ['AnswersController@store', $question->id]]) !!}

                            <div class="form-group">
                                {!! Form::label('answer', '') !!}
                                {!! Form::textarea('answer', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Create Answer', ['class' => 'btn btn-primary form-control']) !!}
                            </div>

                            {!! Form::close() !!}
				</div>	
				<div class="clearfix"></div>
				<ul class="categories">
						<li><a href="#">Markets</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Special reports</a></li>
						<li><a href="#">Culture</a></li>
					</ul>
					<div class="clearfix"></div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		@endsection
{{-- response

				<div class="response">
					<h4>Responses</h4>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/c1.jpg" alt=""/>
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Sep 21, 2015</li>
								<li><a href="single.html">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/c2.jpg" alt=""/>
									</a>
									<h5><a href="#">Username</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>July 17, 2015</li>
										<li><a href="single.html">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/c3.jpg" alt=""/>
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>June 21, 2015</li>
								<li><a href="single.html">Reply</a></li>
							</ul>		
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/c4.jpg" alt=""/>
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Mar 28, 2015</li>
								<li><a href="single.html">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/c5.jpg" alt=""/>
									</a>
									<h5><a href="#">Username</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>Feb 19, 2015</li>
										<li><a href="single.html">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/c6.jpg" alt=""/>
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Jan 20, 2015</li>
								<li><a href="single.html">Reply</a></li>
							</ul>		
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>	 --}}
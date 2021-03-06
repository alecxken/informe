@extends('questions.i')

@section('content')

			<div class="single-page">
		{{-- 	<div class="col-md-2 share_grid">
				@include('homepage.side')
			</div> --}}	
			<div class="col-md-8 content-left single-post">
				<div class="blog-posts">
				      @if (Auth::check())
                    <div class="row">
                        <div class="col-md-12">
                            <div style="float:right;">
                                <a href="{{action('QuestionsController@create')}}">
                                    <button class="btn btn-success">Post Question</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif
                      @foreach($questions as $question)
                       <a href="{{action('QuestionsController@show', [$question->id])}}">
			<h4 class="post">{{ $question->topic }}</h4>
			  <h5 class="post"><a href="#">
                                    @if($question->answers->where('is_solution', 1)->count() > 0)
                                    [SOLVED]
                                    @endif

                                  {{ $question->title }}
                               </a> </h5>
				<div class="last-article">
				 <p>Posted: 
{{ $question->created_at->diffForHumans() }} By: {{ $question->user->username }}
<a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a>
<a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $question->views }}</a>
<a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $question->answers()->count() }}</a>
</p>
					<p class="artext">{{ $question->question }}</p>
					 <span><a class="span_link"  href="{{action('AnswersController@create', [$question->id])}}">Reply</a></span>
					  @endforeach
					<ul class="categories">
						<li><a href="#">Markets</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Sport</a></li>
						<li><a href="#">Special reports</a></li>
						<li><a href="#">Culture</a></li>
					</ul>
				
					

				<div class="clearfix"></div>
			</div>
	
		
		
@endsection
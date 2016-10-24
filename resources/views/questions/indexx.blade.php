@extends('layouts.masterr')

@section('content')

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
                    <div class="article">
                    {{--    <div class="article-left">
                            <a href="{{action('QuestionsController@show', [$question->id])}}"><img src="images/article1.jpg"></a>
                        </div> --}}
                        <div class="article-right">

                        <div class="article-title">
                        <p>
{{ $question->created_at->diffForHumans() }}On Feb 25, 2015 By: {{ $question->user->username }}
<a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a>
<a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $question->views }}</a>
<a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>{{ $question->answers()->count() }}</a>
</p>
<a class="title" href="{{action('QuestionsController@show', [$question->id])}}"> 
  @if($question->answers->where('is_solution', 1)->count() > 0)   [SOLVED]
   @endif                 {{ $question->title }}</a>
         <h6><a class="title" href=""> {{ $question->topic }} </a></h6>     
                            </div>
                            <div class="article-text">
                                <p>{{ $question->question }}</p>
                                <span><a class="span_link"  href="{{action('AnswersController@create', [$question->id])}}">Reply</span></a>
                                <a href="single.html"><img src="{{ URL::asset("image/$question->image") }}" alt="" /></a></span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        </div>
                         @endforeach
                        <div class="clearfix"></div>
                
                </div>

@endsection

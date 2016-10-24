@extends('layouts.masterr')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="response">
            <div class="">
            
                <div class="media-body response-text-right">
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
                    <div class="">
                        <div class="">
                            <hr/>
                            <a href="{{action('QuestionsController@show', [$question->id])}}">
                                <h6 class="top"> {{ $question->topic }}</h6>
                                <h5 class="top"><a href="#">
                                    @if($question->answers->where('is_solution', 1)->count() > 0)
                                    [SOLVED]
                                    @endif

                                  {{ $question->title }}
                               </a> </h5>
                            </a>
                            <small>By: {{ $question->user->username }} - {{ $question->created_at->diffForHumans() }}</small>
                            <p>{{ $question->question }}</p>

                            <p><img  src="{{ URL::asset("image/$question->image") }}"  alt=""> </p>
                            <small>Views: {{ $question->views }} | Answers: {{ $question->answers()->count() }} |<span><a class="span_link"  href="{{action('AnswersController@create', [$question->id])}}">Reply</span></a></small>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

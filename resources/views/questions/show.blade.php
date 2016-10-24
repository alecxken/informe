@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <h3 class="tittle">Questions <i class="glyphicon glyphicon-file"></i></h3>
            <div class="single">
               <img src="{{asset('images/3.jpg')}}" class="img-responsive" alt="" />
                <div class="b-bottom"> 
                 <h6 class="top"><a href=""> {{ $question->topic }} </a></h6>
                  <h5 class="top"><a href="">
                  @unless(is_null($solution))
                                [SOLVED]
                                @endunless
                               ({{ $question->title }})
                                
                  </a></h5>
                   <p class="sub">{{ $question->question }}</p>
                  <p> {{ $question->created_at->diffForHumans() }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>{{ $question->views }}</a><p><a class="span_link"  href="{{action('AnswersController@create', [$question->id])}}">Reply</a></p></p> @if(Auth::id() == $question->user->id)
                                <a href="{{ action('QuestionsController@edit',[$question->id]) }}">
                                    <small>Edit</small>
                                </a>
                            @endif</p>
                 
                </div>
             </div>
   
    

    <div class="">
        <div class="response">
            <div class="media response-info">
                <h4>Answers</h4>
                <div class="panel-body">
                    @if (Auth::check())
                    <div class="row">
                        <div class="media-body response-text-right">
                            <div style="float:right;">
                                <a href="{{action('AnswersController@create', [$question->id])}}">
                                    <button class="">Post Answer</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="">
                        <div class="media-body response-text-right">

                            @unless(is_null($solution))
                            <div class="" style="margin-bottom: 20px">
                                <div class="cmedia-body response-text-rigth">
                                 
                                    <h1 style="color:green">Solution</h1>
                                        
                                    <p>{{ $solution->answer }}</p>
                                    <small>By: {{ $solution->user->username }} - {{ $solution->created_at->diffForHumans() }} </small>

                                    <hr/>
                                    <hr/>
                                </div>
                            </div>
                            @endunless

                            @foreach($question->answers()->oldest()->get() as $answer)
                                @unless($answer->is_solution)
                                    <div class="">
                                        <div class="">
                            <a href="#">
                                <img class="media-object" src="{{asset('images/sin1.jpg')}}" alt=""/>
                            </a>
                            <h5><a href="#">{{ $answer->user->username }}</a></h5>
                        </div>
                                        <div class="">
                                            
                                            <p>{{ $answer->answer }}</p>
                                          <p> {{ $question->created_at->diffForHumans() }} <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>
                                          {{ $question->views }}</a><p><small>
                                           @if($answer->user->id == Auth::id())
                                             <a class="span_link"  href="{{ action('AnswersController@edit', [$question->id, $answer->id]) }}">Edit</a>
                                         
                                            @endif</p>   </small>
                                            @if(Auth::id() == $question->user->id && is_null($solution))
                                            <br/>
                                            <a href="{{action('QuestionsController@solved', [$question->id, $answer->id])}}">
                                                <button class="btn btn-success">Solution!</button>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                @endunless
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

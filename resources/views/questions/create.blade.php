@extends('homepage.index')

@section('content')

<div class="container-fluid">
    <div class="">
        <div class="response">

            <div class="">
                <div class="">
                    Create Question
                </div>
                <div class="panel-body">

                    @include('errors.list')

                    {!! Form::open(['action' => 'QuestionsController@store']) !!}

<div class="form-group">
                        {!! Form::label('topic', 'Topic:') !!}
                        {!! Form::text('topic', null, ['class' => 'form-control']) !!}
                    </div>


                    <div class="form-group">
                        {!! Form::label('title', 'Title:') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
 <div class="form-group">
            {!! Form::label('image', 'Choose an image') !!}
            {!! Form::file('image') !!}
        </div>
                    <div class="form-group">
                        {!! Form::label('question', 'Question:') !!}
                        {!! Form::textarea('question', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Add Question', ['class' => 'btn btn-primary form-control']) !!}
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

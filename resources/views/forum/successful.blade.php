@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Congratulations!</div>

                <div class="panel-body">
                    Your post was successful!
                </div>
                {!! Form::open(['method' => 'POST', 'action' => 'HomeController@forumByCat']) !!}
                    {!! Form::submit('Go Back to Forum', ['class' => 'btn btn-primary form-control']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
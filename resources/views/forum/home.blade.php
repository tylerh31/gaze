@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Forum</div>
                @foreach($threads as $thread)
                    <div class="panel-body">
                        <h1>{!! $thread['title'] !!}</h1>
                        <p>{!! str_limit($thread['body'], 150) !!}</p>
                        {!! $thread['user'] !!}
                    </div>
                @endforeach
            </div>
            {!! $threads->render() !!}
        </div>
    </div>
</div>
@endsection
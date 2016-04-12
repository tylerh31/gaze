@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-thread">
                <div class="panel-heading">Forum</div>
                @foreach($threads as $thread)
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="/singleThread/{{ $thread->id }}" class="thread">{!! $thread->title !!}</a>
                                <p>{!! str_limit($thread['body'], 150) !!}</p>
                                @if($thread['category'] == '0')
                                    <h6>Astronomy</h6>
                                @elseif($thread['category'] == '1')
                                    <h6>Astrophotography</h6>
                                @else
                                    <h6>Location</h6>
                                @endif
                                {!! $thread['user'] !!}
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="panel panel-thread">
                <div class="panel-heading">New Thread</div>
                    <div class="panel-body">
                        {!! Form::open(['method' => 'POST', 'action' => 'HomeController@newThread']) !!}
                            <div class="form-group">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                <br>
                                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                            {!! Form::select('category', array(
                                'Astronomy',
                                'Astrophotography',
                                'Locations',
                            )) !!}
                            <br>
                            <br>
                                {!! Form::submit('Post', ['class' => 'btn btn-thread form-control']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
            </div>
            {!! $threads->render() !!}
        </div>
    </div>
</div>
@endsection
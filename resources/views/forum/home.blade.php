@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-thread">
                <div class="panel-heading">New Thread</div>
                    <div class="panel-body">
                        {!! Form::open(['method' => 'POST', 'action' => 'HomeController@newThread']) !!}
                            <div class="form-group">
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                                <br>
                                {!! Form::textarea('body', null, ['class' => 'form-control',  'rows' => 4, 'cols' => 40]) !!}
                            </div>
                            <div class="form-group">
                            {!! Form::select('category', array(
                                'Astronomy',
                                'Astrophotography',
                                'Locations',
                                'Questions',
                                'Space Missions',
                                'Telescopes/Binoculars',
                                'Tips',
                            )) !!}
                            <br>
                            <br>
                                {!! Form::submit('Post', ['class' => 'btn btn-thread form-control']) !!}
                            </div>
                        {!! Form::close() !!}
                    </div>
            </div>
            <div class="panel panel-thread">
                <div class="panel-heading">Forum</div>
                @foreach($posts as $post)
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="/singleThread/{{ $post->id }}" class="thread">{!! $post->title !!}</a>
                                <p>{!! str_limit($post->body, $limit = 405, $end = '...') !!}<a href="/singleThread/{{ $post->id }}" class="thread"> (Read More)</a></p>
                                @if($post->category == '0')
                                    <h6>Astronomy</h6>
                                @elseif($post->category == '1')
                                    <h6>Astrophotography</h6>
                                @elseif($post->category == '2')
                                    <h6>Location</h6>
                                @elseif($post->category == '3')
                                    <h6>Questions</h6>
                                @elseif($post->category == '4')
                                    <h6>Space Missions</h6>
                                @elseif($post->category == '5')
                                    <h6>Telescopes/Binoculars</h6>
                                @elseif($post->category == '6')
                                    <h6>Tips</h6>
                                @endif
                                {!! $post->user !!}
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
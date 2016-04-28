@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-thread">
                <div class="panel-heading"><h3>{!! $post['0']->title !!}<h3></div>
                    <div class="panel-body">
                        @foreach($post as $pos)
                            <h5>{!! $pos->body !!}</h5>
                            @if($pos->category == '0')
                                <h6>Astronomy</h6>
                            @elseif($pos->category == '1')
                                <h6>Astrophotography</h6>
                            @elseif($pos->category == '2')
                                <h6>Location</h6>
                            @elseif($pos->category == '3')
                                <h6>Questions</h6>
                            @elseif($pos->category == '4')
                                <h6>Space Missions</h6>
                            @elseif($pos->category == '5')
                                <h6>Telescopes/Binoculars</h6>
                            @elseif($pos->category == '6')
                                <h6>Tips</h6>
                            @endif
                        <p>{!! $pos->user !!}</p>
                        @if($pos->user == Auth::user()->name)
                            <a href="{{URL::to('destroy', $pos->id)}}" class="h6">Delete Thread</a>
                        @endif
                        {!! Form::open(array('action' => array('HomeController@newReply', $pos->id))) !!}
                            <div class="form-group">
                                {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter comment here...']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Reply', ['class' => 'btn btn-thread form-control']) !!}
                            </div>
                        {!! Form::close() !!}
                        @endforeach
                        @foreach($reply as $rep)
                            <div class="panel-body">
                            <h3>{!! $rep->user !!}</h3>
                            <blockquote><h5>{!! $rep->body !!}</h5></blockquote>
                            <h6>{!! $rep->created_at !!}</h6>
                            </div>                  
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
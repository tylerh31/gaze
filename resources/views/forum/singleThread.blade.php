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
                            @else
                                <h6>Location</h6>
                            @endif
                        <p>{!! $pos->user !!}</p>
                        {!! Form::open(array('action' => array('HomeController@newReply', $pos->id))) !!}
                            <div class="form-group">
                                {!! Form::textarea('body', 'Enter Comment Here...', ['class' => 'form-control']) !!}
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
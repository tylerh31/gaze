@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3>{!! $post['0']->title !!}<h3></div>
                    <div class="panel-body">
                        <h5>{!! $post['0']->body !!}</h5>
                        <h6>{!! $post['0']->category !!}</h6>
                        <p>{!! $post['0']->user !!}</p>
                        <?php $a=0; ?>
                        @foreach($reply as $rep)
                            <div class="panel-body">
                            <h3>{!! $rep->user !!}</h3>
                            <h5>{!! $rep->body !!}</h5>
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
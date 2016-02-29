@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-10 col-md-offset-1">
                <div class="jumbotron">
                  <h1>{!! Auth::user()->name !!} is now logged in!</h1>
                  <p>Be sure to check out the news section for upcoming events.</p>
                </div>
            </div>
    </div>
</div>
@endsection

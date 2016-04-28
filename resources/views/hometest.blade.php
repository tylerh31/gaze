@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 test">
        <h3><a href="{{ url('/news') }}" style="color: #555;">News</a></h3>
        <hr>
        <div style="background-image:url('{{ asset('jupiter.jpg') }}'); color: white; height: 175px;" class="jumbotron jumbotron-dark"><h3><a href="http://www.universetoday.com/15182/interesting-facts-about-jupiter/" target="_blank">Ten Interesting Facts About Jupiter</a></h3></div>
        </div>
        <div class="col-md-6 test">
        <h3><a href="{{ url('/categories') }}" style="color: #555;">Forum</a></h3>
        <hr>
        <div style="height: 175px;" class="jumbotron jumbotron-dark"><h3>There are currently {!! $posts !!} threads on the forum.</div>
        </div>
        <div class="col-md-6 test">
        <h3><a href="{{ url('/weather') }}" style="color: #555;">Weather</a></h3>
        <hr>
        <div style="background-image:url('{{ asset('IMG_9995.jpg') }}'); height: 175px;" class="jumbotron jumbotron-dark"><h3 style="margin-top: 8px; color: white;">{!! $night_text !!}</h3><p style="color: white; font-size: 10pt;">{!! $night_forecast !!}</p></div>
        </div>
        <div class="col-md-6 test">
        <h3><a href="{{ url('/solarsystem') }}" style="color: #555;">Interactive Solar System</a></h3>
        <hr>
        <div style="background-image:url('{{ asset('solar-system.jpg') }}'); color: white; height: 175px;" class="jumbotron jumbotron-dark"> </div>
        </div>
    </div>
</div>
@endsection


<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
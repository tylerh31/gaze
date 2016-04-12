@extends('layouts.app')

@section('content')

	<div class="container">
		{!! Form::open(['method' => 'POST', 'action' => 'HomeController@weather']) !!}
			<div class="row">
		        <div class="col-sm-4 col-sm-offset-4">
		            <div id="imaginary_container"> 
		            	<h2 class="zip">Enter zip code</h2>
		                <div class="input-group stylish-input-group">
		                    {!! Form::text('body', null, ['class' => 'form-control']) !!}
		                    <span class="input-group-addon">
		                        <button type="submit">
		                            <span class="glyphicon glyphicon-search"></span>
		                        </button>  
		                    </span>
		                </div>
		            </div>
		        </div>
			</div>
		{!! Form::close() !!}

		<div class="card card-dark">
			<h2 class="zip">{!! $night_text !!}</h2>
			<p class="zip">Location: {!! $location !!}<br>
			Moon Illumination: {!! $moon_illum !!}%<br>
			Moon Phase: {!! $moon_phase !!}<br>
			Sun Set: {!! $sun_set !!}<br>
			Moon Rise: {!! $moon_rise !!}<br>
			{!! $night_forecast !!}<br></p>
		</div>
	</div>


@endsection

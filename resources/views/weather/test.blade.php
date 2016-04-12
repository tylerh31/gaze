	<div class="container">
		{!! Form::open(['method' => 'POST', 'action' => 'HomeController@weather']) !!}
			<div class="row">
		        <div class="col-sm-4 col-sm-offset-4">
		            <div id="imaginary_container"> 
		            	<h2>Enter zip code</h2>
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

		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				Location: {!! $location !!} <br>
				Moon Illum: {!! $moon_illum !!}% <br>
				Moon Name: {!! $moon_phase !!} <br>
				Sun Set: {!! $sun_set !!} <br>
				Moon Rise: {!! $moon_rise !!} <br>
				{!! $night_text !!} <br>
				{!! $night_forecast !!} <br>
			</div>
		</div>
	</div>
@extends('layouts.app')

@section('content')
  @if($error)
  <div class="alert alert-danger col-sm-4 col-sm-offset-4" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span>
    {!! $error !!}
  </div>
  @endif
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
			<h4 class="zip">Tonight's moon
				<span id="month"></span>/<span id="day"></span>/<span id="year"></span>
			</h4>
			<div class="container-moon col-sm-12 col-sm-offset-2">
			  <canvas id="moonCanvas" width="200px" height="200px"></canvas> 
			</div>
		
			<br>
				<p class="zip">Location: {!! $location !!}<br>
				Moon Illumination: {!! $moon_illum !!}%<br>
				Moon Phase: {!! $moon_phase !!}<br>
				Sun Set: {!! $sun_set !!}<br>
				Moon Rise: {!! $moon_rise !!}<br>
				{!! $night_forecast !!}<br></p>
	</div>

<script>


//gets todays date and calls on the draw function
function initLunarPhase(){
  var $date=new Date();
  var $year=$date.getFullYear();
  var $month=$date.getMonth()+1;
  var $day=$date.getDate();
 
  document.getElementById('day').innerHTML=$day;
  if ($month<10) {
    document.getElementById('month').innerHTML='0'+$month;
  }
  else {
    document.getElementById('month').innerHTML=$month;
  }
  document.getElementById('year').innerHTML=$year;
  
  var $moonPhase=moonPhase($year,$month,$day);
  drawMoon($moonPhase-1);
}


//function that calculates the moon phase given a certain day
function moonPhase(year,month,day) {
  n = Math.floor(12.37 * (year -1900 + ((1.0 * month - 0.5)/12.0)));
  RAD = 3.14159265/180.0;
  t = n / 1236.85;
  t2 = t * t;
  as = 359.2242 + 29.105356 * n;
  am = 306.0253 + 385.816918 * n + 0.010730 * t2;
  xtra = 0.75933 + 1.53058868 * n + ((1.178e-4) - (1.55e-7) * t) * t2;
  xtra += (0.1734 - 3.93e-4 * t) * Math.sin(RAD * as) - 0.4068 * Math.sin(RAD * am);
  i = (xtra > 0.0 ? Math.floor(xtra) :  Math.ceil(xtra - 1.0));
  j1 = julday(year,month,day);
  jd = (2415020 + 28 * n) + i;
  return (j1-jd + 30)%30;
}

//function that calculates julian date
function julday(year, month, day) {
  if (year < 0) { year ++; }
  var jy = parseInt(year);
  var jm = parseInt(month) +1;
  if (month <= 2) {jy--;  jm += 12; } 
  var jul = Math.floor(365.25 *jy) + Math.floor(30.6001 * jm) + parseInt(day) + 1720995;
  if (day+31*(month+12*year) >= (15+31*(10+12*1582))) {
    ja = Math.floor(0.01 * jy);
    jul = jul + 2 - ja + Math.floor(0.25 * ja);
  }
  return jul;
}

//draws the lunar phase
function drawMoon($moonPhase){
  var $moonCanvas=document.getElementById('moonCanvas');
  var $ctx=$moonCanvas.getContext('2d');
  
  //draw half moon
  var $radius=100;
  var $centerX=$moonCanvas.width/2;
  var $centerY=$moonCanvas.height/2;
  var $moonFill=$ctx.createRadialGradient($centerX, $centerY, $radius, $centerX, $centerY, 90);
  $moonFill.addColorStop(0,   'black');
  $moonFill.addColorStop(1, 'white');
  
  $ctx.beginPath();
  $ctx.arc($centerX,$centerY,$radius,270*(Math.PI/180),90*(Math.PI/180),($moonPhase<15)?false:true);
  $ctx.fillStyle=$moonFill;
  $ctx.fill();
  
  //draw moon fill
  var $ovalWidth=-200;
  $ovalWidth=($moonPhase<15)?-200+$moonPhase*28.5:200-(($moonPhase-15)*28.5);
  var $ovalColor=($ovalWidth>0)? $moonFill:'black';
  
  drawEllipse($ctx,$centerX-$ovalWidth/2,0,$ovalWidth,200,$ovalColor);
  function drawEllipse(ctx, x, y, w, h,fill) {
    var kappa = .5522848;
        ox = (w / 2) * kappa, // control point offset horizontal
        oy = (h / 2) * kappa, // control point offset vertical
        xe = x + w,           // x-end
        ye = y + h,           // y-end
        xm = x + w / 2,       // x-middle
        ym = y + h / 2;       // y-middle
  
    ctx.beginPath();
    ctx.moveTo(x, ym);
    ctx.bezierCurveTo(x, ym - oy, xm - ox, y, xm, y);
    ctx.bezierCurveTo(xm + ox, y, xe, ym - oy, xe, ym);
    ctx.bezierCurveTo(xe, ym + oy, xm + ox, ye, xm, ye);
    ctx.bezierCurveTo(xm - ox, ye, x, ym + oy, x, ym);
    ctx.fillStyle=$ovalColor;
    ctx.fill();
  }
};


initLunarPhase();

</script>

@endsection
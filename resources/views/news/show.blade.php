@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-6" style="position: fixed; top: 9%;">
		<aside class="my-relative-position-class">
			<a class="twitter-timeline" href="https://twitter.com/tylerhamsen/lists/gaze" data-widget-id="717932931776454656" width="50rem" height="85%" style="position: fixed;">Tweets from https://twitter.com/tylerhamsen/lists/gaze</a>
		</aside>
	</div>
	<div class="col-sm-6 col-sm-offset-6" style="margin-top: 1%;">
		<section>
		<h1 style="text-align: left;"><a href="http://cs.astronomy.com/asy/b/astronomy/archive/2016/04/18/astronomy-as-citizen-science.aspx" style="color: black;">Astronomy as citizen science</a></h1>
			<p>This past Saturday, April 16, kicked off National Citizen Science Day (though events run throughout the month), and I spent it celebrating with the estimated 350,000 attendees of the...</p>
		<hr>
		<h1 style="text-align: left;"><a href="http://www.astronomy.com/community/from-the-industry/2016/04/global-astronomy-month" style="color: black;">Global Astronomy Month: Sharing the Sky</a></h1>
			<p>Global Astronomy Month (GAM) – Every year in April, the world’s largest annual celebration of astronomy offers a unique demonstration of the power of the night sky to bring people together from around the world...</p>
		<hr>
		<h1 style="text-align: left;"><a href="http://earthsky.org/space/comet-halley-parent-of-2-meteor-showers" style="color: black;">Comet Halley, parent of 2 meteor showers</a></h1>
			<p>Comet Halley, proud parent of two meteor showers, swings into the inner solar system about every 76 years. At such times, the sun’s heat causes the comet to loosen its icy grip over its mountain-sized conglomeration of ice, dust and gas...</p>
		<hr>
		<<h1 style="text-align: left;"><a href="https://astronomynow.com/2016/04/24/plutos-mysterious-halo-craters/" style="color: black;">Pluto’s mysterious ‘halo’ craters</a></h1>
			<p>Within Pluto’s informally named Vega Terra region is a field of eye-catching craters that looks like a cluster of bright haloes scattered across a dark landscape.
			The region is far west of the hemisphere NASA’s New Horizons spacecraft viewed during close approach last summer...</p>
		<hr>
		<h1 style="text-align: left;"><a href="http://www.toledoblade.com/Education/2016/04/20/University-of-Toledo-astronomy-team-finds-new-object-in-space.html" style="color: black;">UT astronomers identify young ‘brown dwarf’</a></h1>
			<p>A University of Toledo astronomy team that includes a sophomore student found what researchers have identified as a new and very young object in space. Astrophysics major James Windsor of Paulding, Ohio, started working on the project as a freshman and will be listed as a co-author of an upcoming study about the discovery. He is 20...</p>
		<hr>
		<h1 style="text-align: left;"><a href="https://astronomynow.com/2016/04/23/see-the-moon-join-mars-and-saturn-in-the-morning-sky/" style="color: black;">See the Moon join Mars and Saturn in the morning sky</a></h1>
			<p>Now just a month before opposition, Mars lies in the constellation Ophiuchus bordering on Scorpius. The Red Planet is fast growing in prominence as the distance between it and the Earth steadily decreases...</p>
		<hr>
		<h1 style="text-align: left;"><a href="http://www.astronomy.com/news/2016/04/esa-finds-a-frigid-surprise-hiding-at-venus-poles" style="color: black;">ESA Finds a Frigid Surprise Hiding at Venus' Poles</a></h1>
			<p>Thanks to a thick layer of cloud cover trapping in heat, Venus is the hottest planet in our solar system, with temperatures boiling over at 850 degrees Fahrenheit (454 C)...</p>
		<hr>
		<h1 style="text-align: left;"><a href="http://news.discovery.com/space/history-of-space/obama-to-shine-light-on-unsung-hero-of-astronomy-160415.htm" style="color: black;">Obama to Shine Light on Unsung Hero of Astronomy</a></h1>
			<p>Dig deep in the annals of astronomy and you'd be hard-pressed to find the name of Henrietta Swan Leavitt, a 19th-century astronomer whose ground-breaking insights about a special kind of star led to a cosmic yardstick for measuring the universe...</p>
		<hr>
		</section>
	</div>
</div>
@endsection


<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<script type="text/javascript">
var max_scroll = 400; // this is the scroll position to start positioning the nav in a fixed way
$(document).ready(function(){

        $(window).scroll(function () {
        var navbar = $(".filterbutton");

        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        if(scrollTop > max_scroll && !navbar.is(".filterbuttonFixed")) {
                navbar.addClass("filterbuttonFixed");
                // console.log("go floated");
        }
        else if(scrollTop < max_scroll && navbar.is(".filterbuttonFixed") ) {
                // console.log("return to normal");
                navbar.removeClass("filterbuttonFixed");
        }

}
});

</script>

</script>
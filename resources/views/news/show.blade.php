@extends('layouts.app')

@section('content')
<div class="container">
	<div class="col-sm-6">
		<aside class="my-relative-position-class">
			<a class="twitter-timeline" href="https://twitter.com/tylerhamsen/lists/gaze" data-widget-id="717932931776454656" width="50rem" height="65rem" style="position: fixed;">Tweets from https://twitter.com/tylerhamsen/lists/gaze</a>
		</aside>
	</div>
	<div class="col-sm-6">
		<section>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
		<hr>
		<h1 style="text-align: left;">Article Title</h1>
			<p>Article text will be going here but now its just stupid dummy text. haha but you just read it all. You dont give up I like you</p>
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
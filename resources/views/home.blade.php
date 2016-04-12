@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-10 col-md-offset-1">
                <div class="jumbotron jumbotron-dark">
                  <h1>{!! Auth::user()->name !!} is now logged in!</h1>
                  <blockquote class="twitter-tweet tast" data-lang="en">
                  	<p lang="en" dir="ltr">Ten Interesting Facts About Jupiter <a href="https://twitter.com/storybywill">@storybywill</a> <a href="https://twitter.com/hashtag/jupiter?src=hash">#jupiter</a> <a href="https://t.co/7cKVDN14q3">https://t.co/7cKVDN14q3</a> <a href="https://t.co/NtXoJcI2F5">pic.twitter.com/NtXoJcI2F5</a></p>&mdash; Universe Today (@universetoday) <a href="https://twitter.com/universetoday/status/717016769009999873">April 4, 2016</a>
                  </blockquote>

                </div>
            </div>
    </div>
</div>
@endsection


<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
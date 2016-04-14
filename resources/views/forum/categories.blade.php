 @extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-thread">
                <div class="panel-heading"><h4>Forum Categories</h4></div>
                @foreach($cats as $cat)
                <div class="page-header">
                    @if ($cat['category'] == '0')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Astronomy</a><small>"Astronomy compels the soul to look upward, and leads us from this world to another." - Plato</small></h1>
                    @elseif($cat['category'] == '1')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Astrophotography</a><small>“Somewhere, something incredible is waiting to be known.” - Carl Sagan</small></h1>
                    @elseif($cat['category'] == '2')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Location</a><small>Posts/discussions relating to best locations for stargazing</small></h1> 
                    @elseif($cat['category'] == '3')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Questions</a><small>A place for general questions about astronomy</small></h1>
                    @elseif($cat['category'] == '4')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Space Missions</a><small>A section for discussions on space missions</small></h1>
                    @elseif($cat['category'] == '5')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Telescopes/Binoculars</a><small>Discuss your setup, or get opinions</small></h1>
                    @elseif($cat['category'] == '6')
                        <h1 class="category"><a href="/categories/{{ $cat['category'] }}" class="alert-link thread">
                        Tips</a><small>A place to share helpful tips for astronomers of all levels</small></h1>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
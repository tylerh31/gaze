<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gaze</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        a {
            color: white;
        }
        body {
            font-family: 'Lato';
            background-color: #7f8c8d;
        }

        .fa-btn {
            margin-right: 6px;
        }
        section {
          display: inline-block;
          margin:  0.25rem;
          padding:  1rem;
          width:  100%; 
          background:  #efefef;
        }


        .stylish-input-group .input-group-addon{
            background: #95a5a6 !important; 
        }
        .stylish-input-group .form-control{
            border-right:0; 
            box-shadow:0 0 0; 
            border-color:#ccc;
            background: #95a5a6
        }
        .stylish-input-group button{
            border:0;
            background:transparent;
        }
        .navbar-gaze {
            background-color: #2c3e50;
            border-color: #2c3e50;
        }
        .icon-bar {
            background-color: white;
        }
        @import url(//fonts.googleapis.com/css?family=Open+Sans:400,600);
        *, *::before, *::after {
          box-sizing: border-box;
        }

        body {
          margin: -0.1rem -0.1rem;
          background-color: #c4c8cc;
          color: #404448;
          font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          line-height: 1.4;
        }

        h1 {
          margin: 0 0 2rem;
          font-weight: 400;
          line-height: 1.1;
          text-align: center;
        }

        p {
          margin: 0 0 1.4em;
        }

        ul {
          margin: 0 0 1.4em;
          padding: 0;
          padding-left: 1.15em;
          list-style-type: square;
        }

        /**
         * The card stack mixin. 
         * 
         * @param   color  $card-color    Main color of the card stack. Defaults to white.
         * @param   color  $shadow-color  Color of the shadow. Defaults to black.
         * 
         * @return  box-shadow            Applies a box shadow to the element.
         */
        .card {
          margin: 1rem auto 2rem;
          padding: 1rem;
          min-width: 10rem;
          max-width: 35rem;
          background-color: white;
          word-wrap: break-word;
          box-shadow: 0 0.0625em 0.1875em 0 rgba(0, 0, 0, 0.1), 0 0.5em 0 -0.25em #f2f2f2, 0 0.5em 0.1875em -0.25em rgba(0, 0, 0, 0.1), 0 1em 0 -0.5em #e6e6e6, 0 1em 0.1875em -0.5em rgba(0, 0, 0, 0.1);
        }
        .card.card-primary, .card.card-dark {
          color: white;
        }
        .card.card-primary {
          background-color: tomato;
          text-shadow: 0 0.0625em 0 rgba(0, 0, 0, 0.25);
          box-shadow: 0 0.0625em 0.1875em 0 rgba(0, 0, 0, 0.1), 0 0.5em 0 -0.25em #f25e43, 0 0.5em 0.1875em -0.25em rgba(0, 0, 0, 0.1), 0 1em 0 -0.5em #e65940, 0 1em 0.1875em -0.5em rgba(0, 0, 0, 0.1);
        }
        .card.card-dark {
          background-color: black;
          box-shadow: 0 0.0625em 0.1875em 0 rgba(0, 0, 0, 0.1), 0 0.5em 0 -0.25em #3d3d3d, 0 0.5em 0.1875em -0.25em rgba(0, 0, 0, 0.1), 0 1em 0 -0.5em #3a3a3a, 0 1em 0.1875em -0.5em rgba(0, 0, 0, 0.1);
        }
        .card > :last-child {
          margin-bottom: 0;
        }
        .zip {
            text-align: center;
        }
        .thread {
            color: #2980b9;
        }
        .panel-thread > .panel-heading {
            color: #fff;
            background-color: #2c3e50;
            border-color: #337ab7;
        }
        .panel-category > .panel-heading {
            color: #fff;
            background-color: black;
            border-color: #337ab7;
        }
        .btn-thread {
            background-color: #2c3e50;
            border-color: #337ab7;
            color: white;
        }
        a:hover {
            color: #2c3e50;
        }
        .jumbotron-dark {
          background-color: #ecf0f1;
        }
        .tast {
          margin: auto;
        }
        .category {
          text-align: left;
          margin-left: 1.5rem;
        }


        @import url('http://fonts.googleapis.com/css?family=Offside');
        #container-moon {
          width:500px;
          margin:auto;  
        }
        .p-moon {
          font-family:'Offside', sans-serif;
          font-size:1.8em;
          color:white;
          text-align:center;
          text-shadow:0 0 10px #fff;
          float:left;
          margin-left:30px;
          margin-top:110px;
        }
        #moonCanvas {
          display:block;
          margin:17% auto;
          float:left
        }
        .test {
          margin-top: 3rem;
          margin-bottom: 2rem;
          height: 22rem;
        }
        hr {
          height: 5px;
          border-color: #555;
          background-color:#555;
          margin-top: 20px;
          margin-bottom: 20px;
          width: 100%;
        }
    </style>




</head>
<body id="app-layout">
    <nav class="navbar navbar-gaze">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Gaze
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if (Auth::guest())
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/news') }}">News</a></li>
                        <li><a href="{{ url('/categories') }}">Forum</a></li>
                        <li><a href="{{ url('/weather') }}">Weather</a></li>
                        <li><a href="{{ url('/solarsystem') }}">Solar System</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>

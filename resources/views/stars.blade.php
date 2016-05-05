<html>
	<head>
	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

		<style>

html {
  margin: 0;
  height: 100%;
}

body {
  margin: 0;
  height: 100%;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  background: black;
  color: #ccc;
  background-size: 100%;
}
.gazelogo {
  color: white;
}
.gazelogo:hover {
  text-decoration: none;
  font-size: 150%;
}


html::before,
html::after,
body::before,
body::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: .5vmin;
  height: .5vmin;
  border-radius: 50%;
  color: transparent;
}



h1 {
  margin: 0;
  height: 12vmin;
  width: 120vmin;
  display: flex;
  justify-content: center;
  position: relative;
}

h1::before {
  content: "";
  display: block;
  position: absolute;
  z-index: -1;
  top: -26vmin;
  left: 29vmin;
  width: 62vmin;
  height: 62vmin;
  border-radius: 50%;
  border: 1.3vmin solid currentColor;
  box-sizing: border-box;
}

em {
  font-family: 'Josefin Sans', sans-serif;
  color: currentColor;
  font-size: 15vmin;
  position: relative;
  font-style: normal;
  width: 20vmin;
  text-align: center;
}

em.planet {
  -webkit-animation: planet-rotate 4s linear infinite;
  animation: planet-rotate 4s linear infinite;
  position: relative;
}

em.planet::before {
  content: "";
  position: absolute;
  top: -.5vmin;
  left: 3.5vmin;
  z-index: -1;
  width: 13vmin;
  height: 13vmin;
  border-radius: 50%;
  background: black;
}

em.planet.left {
  -webkit-transform-origin: 40vmin 5vmin;
  transform-origin: 40vmin 5vmin;
}

em.planet.right {
  -webkit-transform-origin: -20vmin 5vmin;
  transform-origin: -20vmin 5vmin;
}

@-webkit-keyframes planet-rotate {
  to {
    -webkit-transform: rotate(1turn);
  }
}

@keyframes planet-rotate {
  to {
    transform: rotate(1turn);
  }
}
    


		</style>

	</head>

	<body style="background-image:url('{{ asset('/IMG_9995.jpg') }}');">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <div class="container">
        <div class="col-sm-12">
          <a href="{{ url('/home') }}" class="gazelogo">
            <h1>
              <em></em>
              <em class="planet left">G</em>
              <em>A</em>
              <em>Z</em>
              <em class="planet right">E</em>
              <em></em>
            </h1>
          </a>
        </div>
    </div>
</body>
</html>
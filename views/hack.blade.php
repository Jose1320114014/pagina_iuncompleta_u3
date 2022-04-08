<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Mundana Template by WowThemesNet</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700" rel="stylesheet">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!-- Main CSS -->
<link href="./assets/css/main.css" rel="stylesheet"/>
</head>
<body>
<!--------------------------------------
NAVBAR
--------------------------------------->
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
<div class="container">
	<a class="navbar-brand" href="{{Route('index')}}"><strong>HackSick!</strong></a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02" style="">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="{{Route('index')}}">Inicio <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./article.html">Musica</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./article.html">Ando aburrido</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="./article.html">Quien a usado esto</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto d-flex align-items-center">
			
	</div>
</div>
</nav>
<!-- End Navbar -->
    
    
<!--------------------------------------
MAIN
--------------------------------------->
<div class="container pt-4 pb-4">
	<div class="row justify-content-center">
		<div class="col-lg-2 pr-4 mb-4 col-md-12">
			<div class="sticky-top text-center">
				<div class="text-muted">
					"hey, comparte esto con tus amigos, no se para que, pero hazlo si quieres"
				</div>
				<div class="share d-inline-block">
					<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_twitter"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-8">
			
			<p>
				<h2>¿A si que estas aburrido eh?</h2>
				<div><h2>Aqui tienes tu actividad, flojo...</h2></div>
			</p>
			<p>
				 Actividad: {{$datos['activity']}}
			</p>
			<p>
				<a>Que tan accesible es del 0.0 al 1?:  </a>{{$datos['accessibility']}}
			</p>
			<p>	
				<a>Tipo :</a> {{$datos['type']}}
			</p>
			<p>	
				<a>Personas que pueden entrar: </a>{{$datos['participants']}}
		   </p>
		   <p>	
			<a>
				precio de la actvividad: </a>{{$datos['price']}}
	   		</p>
			<p>
				 
			</p>
			
		</div>
	</div>
</div>
    
    
<!--------------------------------------
FOOTER
--------------------------------------->
<div class="container mt-5">
	<footer class="bg-white border-top p-3 text-muted small">
	<div class="row align-items-center justify-content-between">
		<div>
			<span class="navbar-brand mr-2"><strong>HackSick!</strong></span> Copyright &copy;
			<script>document.write(new Date().getFullYear())</script>
			 . All rights reserved.
		</div>

	</div>
	</footer>
</div>
<!-- End Footer -->
    
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->
<script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/functions.js" type="text/javascript"></script>
</body>
</html>
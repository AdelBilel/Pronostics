<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Pronos coupe du monde 2018</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
    </head>
    
    <body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						
					</div>


				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">Liste des Pronos</a></li>
							<li><a href="generic.html">Résultats Des Matchs</a></li>
							<li><a href="elements.html">Contactez-Nous</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="fa fa-male"> Se Connecter </a></li>
							<li><a href="#" class="fa fa-male"> S'inscrire </a></li>
						</ul>
					</nav>
@yield('contenu')

<script src="{{ asset('js/app.js') }}"></script>
		
		


</body>
</html>
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
		<title>{{ config('app.name', 'Album') }}</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
							@admin
							<li class="active"><a href="{{route('accueil')}}">Accueil</a></li>
							<li><a href={{ route('match.index') }}>Match</a></li>
							<li><a href={{ route('pronos.index') }}>Pronostique</a></li>
							
							<li><a href={{ route('contact.create') }}>Mes Messages</a></li>

							@else
							<li class="active"><a href="{{route('accueil')}}">Accueil</a></li>
							@auth
							<li><a href={{ route('pronos.index') }}>Pronostiques</a></li>
							@endauth
							<li><a href={{ route('match.index') }}>Résultats Des Matchs</a></li>
							<li><a href={{ route('contact.create') }}>Contactez Nous</a></li>
							@endadmin
						</ul>
						<ul id="icons">
						
							<ul class="icons">
									@guest
									<li><a href="{{ route('login') }}">Se connecter</a></li>
									<li><a href="{{ route('register') }}">S'inscrire</a></li>
								@else
									
										
											<li>{{ Auth::user()->pseudo }} </li>
										
										<li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Deconnexion</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
										</li>

									

										@endguest
							</ul>









					
						</ul>
					
					</nav>
@yield('contenu')

<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		


</body>
</html>
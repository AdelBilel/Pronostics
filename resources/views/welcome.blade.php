@extends('template')



@section('contenu')
	
				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">

									<h2><a href="#">Bienvenue Sur <br />
									PronosDTA</a></h2>
										<p>
											Tous les jours vous trouverez les matchs de la coupe du monde<br>
                                            Envie de Gagner des points et être premier du classement ? <br>
                                            Alors faite vos paris et si vous avez le bon prono vous gagnez 3 points<br>
                                            A VOUS DE JOUEZ !!!!



										</p>
								</header>
								<a href="#" class="image main"><img src="images/equipe.jpg" alt="" /></a>
								<ul class="actions">
									<li><a href="{{ route('pronos.index') }}" class="button big">C'est parti !!!</a></li>
								</ul>
							</article>

				
					</div>

							@endsection
				
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
		
		


	</body>
</html>
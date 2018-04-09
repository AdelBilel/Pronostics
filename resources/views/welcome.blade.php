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
											Tous es jours vous trouverez les match de la coupe du monde<br>
											Envie de Gagner des point et etre premier du classement ? <br>
											Alors fait vos paris et si vous avez le bon prono vous gagnez 3 point<br>
											A VOUS DE JOUEZ !!!!
											



										</p>
								</header>
								<a href="#" class="image main"><img src="images/equipe.jpg" alt="" /></a>
								<ul class="actions">
									<li><button class="button big">C'est parti !!!</a></li>
								</ul>
							</article>

						<!-- Posts -->
							<section class="posts">
							
								<article>
							
									<header>
							
										<span class="date">Match du jour</span>
							
										<br>
										
							
										<h1>Maroc vs Portugal</h1>
							
									</header>
							
									<a href="#" class="image fit"><img src="images/mvsp.png" alt="" /></a>
									
									<p>Pariez sur ce match ? </p>
									
									<br>
									
										<form >
											
												<label for="equipe1" class="col-md-4 control-label">Score Equipe 1 </label>

												
											<input type="text" name="equipe1" placeholder=" Entrez le score de l'equipe 1 "> 
											
											<br>


											<label for="equipe1" class="col-md-4 control-label">Score Equipe 2 </label>

											<input type="text" name="equipe1" placeholder=" Entrez le score de l'equipe 2 "> 

								
											<div class="col-xs-6">
													<div class="text-center"><button class="btn btn-primary btn-sx" type="button">Confirm</button></div>
												</div>
										</form>

									
								</article>
								
								
								<article>
										<header>
											<span class="date">Match du jour</span>
											<br>
											<br>
											<h1>France vs Pérou</h1>
										</header>
										<a href="#" class="image fit"><img src="images/equipe2.jpg" alt="" /></a>
										
										<p class="buttoncenter">Pariez sur ce match ? </p>
										
										<br>
										<ul class="actions">
											<form >
												
													<label for="equipe1" class="col-md-4 control-label">Score Equipe 1 </label>
	
													<br>
												<input type="text" name="equipe1" placeholder=" Entrez le score de l'equipe 1 "> 
												
	
											</br>
										</br>
	
												<label for="equipe1" class="col-md-4 control-label">Score Equipe 2 </label>
	
												<input type="text" name="equipe1" placeholder=" Entrez le score de l'equipe 2 "> 
	
												<div class="col-xs-6">
														<div class="text-center"><button class="btn btn-primary btn-sx" type="button">Confirm</button></div>
													</div>
											</form>
	
										</ul>
									</article>
							</section>


							@endsection
				
		<!-- Scripts -->
		<script src="{{ asset('js/app.js') }}"></script>
		
		


	</body>
</html>
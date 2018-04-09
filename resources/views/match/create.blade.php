@extends('template')

@section('contenu')
	
				<!-- Main -->
					<div id="main">  

                        @admin
                        
                           
 
                               
    <div class="panel-heading">Ajouter un match</div>
    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="{{ route('match.store') }}">
                                {{ csrf_field() }}
    
    
            <div class="form-group{{ $errors->has('equipe1') ? ' has-error' : '' }}">
                <label for="equipe1" class="col-md-6 control-label">Equipe 1 </label>
    
                <div class="col-md-6">
                    <input id="equipe1" type="text" class="form-control" name="equipe1" value="{{ old('equipe1') }}" required autofocus>
    
                    @if ($errors->has('equipe1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('equipe1') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br>
    
    
                <div class="form-group{{ $errors->has('equipe2') ? ' has-error' : '' }}">
                    <label for="equipe2" class="col-md-6 control-label">Equipe 2 </label>
    
                    <div class="col-md-6">
                        <input id="equipe2" type="text" class="form-control" name="equipe2" value="{{ old('equipe2') }}" required autofocus>
    
                        @if ($errors->has('equipe2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('equipe2') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('resultat1') ? ' has-error' : '' }}">
                        <label for="resultat1" class="col-md-10 control-label"> Résultat Equipe 1  </label>
        
                        <div class="col-md-6">
                            <input id="resultat1" type="number" class="form-control" name="resultat1" value="{{ old('resultat1') }}" >
        
                            @if ($errors->has('resultat1'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('resultat1') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('resultat2') ? ' has-error' : '' }}">
                            <label for="resultat2" class="col-md-10 control-label"> Résultat Equipe 2 </label>
            
                            <div class="col-md-6">
                                <input id="resultat2" type="number" class="form-control" name="resultat2" value="{{ old('resultat2') }}">
            
                                @if ($errors->has('resultat2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('resultat2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
        
    

    
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Valider
                        </button>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>
  

    @else

    <h1>Vous devez etre un admin pour avoir acces a cette page</h1>
                           
                            </div>
                            @endadmin                       
    
    @endsection
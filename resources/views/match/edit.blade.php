@extends('template')

@section('contenu')

<div id="main">


        <div class="panel-heading">Modifier un match</div>
        <div class="main-login main-center">


    
        

                               
  
        {!! Form::open(['method' => 'put', 'url' => route('match.update', $match)]) !!}
        {{ csrf_field() }}
                    
        <div class="form-group">
        
        {!! Form::label('equipe2', 'Equipe 1 : ') !!}
        
        
        {!! Form::text('equipe1', $match->equipe1, ['class' => "form-control"]) !!}
        
        </div>
        
        
        <div class="form-group">
        
        {!! Form::label('equipe2', 'Équipe 2  : ') !!}
        
        
        {!! Form::text('equipe2', $match->equipe2, ['class' => "form-control"]) !!}
        
        </div>
        
        
        
        <div class="form-group">
        
        {!! Form::label('resultat1', 'Score 1  : ') !!}
        
        
        {!! Form::text('resultat1', $match->resultat1, ['class' => "form-control"]) !!}
        
        </div>
        
        <div class="form-group">
        
        {!! Form::label('resultat2', 'Score 2 : ') !!}
        
        
        {!! Form::text('resultat2', $match->resultat2, ['class' => "form-control"]) !!}
        
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

        
        
            
        {!! Form::close() !!}


</div>




@endsection
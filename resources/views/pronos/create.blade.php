@extends('template')

@section('contenu')



<div align="center">


        
        
  
        
        
{!! Form::open(['url' => route('pronos.store')]) !!}

                    



<div class="form-group">

{!! Form::label('match_id', 'match_id : ') !!}


{!! Form::text('match_id', $match, ['class' => "form-control"]) !!}

</div>




<button class=" btn btn-primary">Envoyer</button>


    
{!! Form::close() !!}
	





@endsection
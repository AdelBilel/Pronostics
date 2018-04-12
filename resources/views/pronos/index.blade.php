@extends('template')

@section('contenu')


<div id="main">
<br><br><br>

@admin <!-- si l'utilisateur est admin -->
<div align="center">
<h3 class="panel-title">Pronostique</h3>
</div>
                <table class="table table-striped">
                <thead>
                <tr>
                    <th><span>Nom</span></th>
                    <th><span>Equipe 1 </span></th>
                    <th><span>Equipe 2 </span></th>
                    <th><span>Score 1  </span></th>
                    <th><span>Score 2</span></th>
                    <th><span>Point </span></th>
                    
                    
                    
                </tr>
                </thead>
                <tbody>
                    @foreach($pronos as $prono)


                    <tr>
                        <td> {{ $prono->pseudo}}</td>
                        <td> {{ $prono->equipe1 }}</td>
                        <td>{{ $prono->equipe2 }}</td>
                        <td> {{ $prono->score1}}</td>
                        <td> {{ $prono->score2}}</td>
                        <td>
<br>
                                {!! Form::open(['class' => 'form-inline', 'method' => 'put', 'url' => route('pronos.update', $prono)]) !!}
                                {{ csrf_field() }}
                                
                                            
                                <div class="form-group">
                                
                                
                                
                                
                                {!! Form::number('point', $prono->point, ['class' => "form-control"]) !!}
                                
                                </div>



                        </td>
                        <td>

                                <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Valider
                                            </button>
                                        </div>

                                </div></td>

                                {!! Form::close() !!}
                        
                        


                    </tr>


                    @endforeach




                </tbody>
                
            </table>
            <br><br>







@else

@auth   <!-- si l'utilisateur est connecté mais pas admin -->

        <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Equipe 1 
                        </th>
                        <th>Equipe 2 </th>
                        <th>Votre Prono Équipe 1 </th>
                        <th>Votre Prono Équipe 2 </th>
                        
                        
                    </tr>
                </thead>
                <tbody>
    
    
      
    
         @foreach($matchs as $match)
    
         <tr>
                <th scope="row"><?php echo $match->id ?></th> 
                <td><?php echo $match->equipe1 ?>    </td>
                <td><?php echo $match->equipe2 ?>   </td>
                <td> 
                    <br>

                        <form class="form-inline" action="{{ route('pronos.store') }}" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                
                             
                                        <input type="number" class="form-control" id="email" name="score1">
                                      </div>

                                      <div class="form-group">
                                
                             
                                            <input type="hidden" class="form-control" id="email" name="user_id" value="{{ Auth::user()->id }}">
                                          </div>

                                          <div class="form-group">
                                
                             
                                                <input type="hidden" class="form-control" id="email" name="equipe1" value="{{ $match->equipe1 }}">
                                              </div>

                                              <div class="form-group">
                                
                             
                                                    <input type="hidden" class="form-control" id="email" name="equipe2" value="{{ $match->equipe2 }}">
                                                  </div>

                                                  <div class="form-group">
                                
                             
                                                        <input type="hidden" class="form-control" id="email" name="point" value="{{ Auth::user()->score }}">
                                                      </div>


                                          <div class="form-group">
                                
                             
                                                <input type="hidden" class="form-control" id="email" name="pseudo" value="{{ Auth::user()->pseudo }}">
                                              </div>

                                          <div class="form-group">
                                
                             
                                                <input type="hidden" class="form-control" id="email" name="match_id" value="{{ $match->id }}">
                                              </div>
              
          
                        </td>
                        <td>

                            <div class="form-group">
                             
                                    <input type="number" class="form-control" id="email" name="score2">
                                  </div>
                            
                        </td>
                        <td>    
                                <input type="submit" value="Valider"></a>
                          </form>
                        </td>

          
                    
                    
                
                
                
    
               
                
                
            </tr>
    
        @endforeach
                </tbody>
    
         </table>
         <br>
         <br>


@endauth
@endadmin
@guest  <!-- si l'utilisateur est un invité -->

<div align="center">

<h1>Veuillez vous connecter pour avoir acces a cette partie</h1><br>
<a href="{{ route('login')}} " class="button big">Se Connecter</a>
</div>



@endguest




</div>

@endsection
@extends('template')

@section('contenu')


<div id="main">
<br><br><br>

@admin
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
                        <th> {{ $prono->pseudo}}</th>
                        <th> {{ $prono->equipe1 }}</th>
                        <th>{{ $prono->equipe2 }}</th>
                        <th> {{ $prono->score1}}</th>
                        <th> {{ $prono->score2}}</th>
                        <th> {{ $prono->point}}</th>
                        
                        


                    </tr>


                    @endforeach




                </tbody>
                
            </table>
            <br><br>







@else

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






@endadmin
</div>

@endsection
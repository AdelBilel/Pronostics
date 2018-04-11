@extends('template')

@section('contenu')


<div id="main">
<br><br><br>

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







</div>

@endsection
@extends('template')

@section('contenu')



			<!-- Main -->
            <div id="main">  

                    
                        
                           
 
                         <div align="center">    
                             <br>
                             <br>  
                <div class="panel-heading"><h1>Résultat des match</h1></div>
                @admin

                <a href={{ route('match.create') }} class="btn btn-primary btn-lg active">Ajouter un match</a>
                @endadmin
                         </div>

                         <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Match</th>
                                        <th>Résultat</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>


                      

                         @foreach($match as $resultat)

                         <tr>
                                <th scope="row"><?php echo $resultat->id ?></th> 
                                <td><?php echo $resultat->equipe1 ?> - <?php echo $resultat->equipe2 ?>  </td>
                                <td><?php echo $resultat->resultat1 ?> - <?php echo $resultat->resultat2 ?>  </td>
                                @admin

                                <td><a href={{ route('match.create') }} class="btn btn-primary btn-lg active">Modifier</a></td>
                                @endadmin
                                
                            </tr>

                        @endforeach
                                </tbody>

                         </table>
                         <br>
                         <br>
            </div>
            
@endsection


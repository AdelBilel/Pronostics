@extends('template')

@section('contenu')
	
				<!-- Main -->
					<div id="main">  

                        @admin

                        <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                    
                    
                      
                    
                         @foreach($contact as $contacts)
                    
                         <tr>
                                <th scope="row"><?php echo $contacts->id ?></th> 
                                <td><?php echo $contacts->nom ?> </td>
                                <td><?php echo $contacts->email ?>   </td>
                                <td><?php echo $contacts->message ?>   </td>
                                
                                
                    
                               
                                
                                
                            </tr>
                    
                        @endforeach
                                </tbody>
                    
                         </table>
                         <br><br><b>
                        
                    




                        @else

                       
                        
                           
 
                               
    <div class="panel-heading">Contacter l'administrateur</div>
    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="{{ route('contact.store') }}">
                                {{ csrf_field() }}
    
    
            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                <label for="nom" class="col-md-10 control-label">Nom</label>
    
                <div class="col-md-14">
                    <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>
    
                    @if ($errors->has('nom'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <br>
    
    
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-lg-10 control-label">Email </label>
    
                    <div class="col-md-10">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
    
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                        <label for="message" class="col-md-10 control-label"> Message </label>
        
                        <div class="col-md-20">
                            <textarea id="message"  class="form-control" name="message" value="{{ old('message') }}" ></textarea>
        
                            @if ($errors->has('message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                   
        
    

    
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </div>
                </div>
        </div>
    </div>
    </div>
    </div>


@endadmin
                           
                            </div>
                                                  
    
    @endsection
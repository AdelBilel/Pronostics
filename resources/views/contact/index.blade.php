@extend('template')

@section('contenu')


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


  

     @foreach($contact as $$contacts)

     <tr>
            <th scope="row"><?php echo $$contacts->id ?></th> 
            <td><?php echo $$contacts->nom ?> </td>
            <td><?php echo $$contacts->email ?>   </td>
            <td><?php echo $$contacts->message ?>   </td>
            
            

           
            
            
        </tr>

    @endforeach
            </tbody>

     </table>
     <br>
     <br>
</div>



    @endadmin


</div>


@endsection
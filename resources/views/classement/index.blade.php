@extends('template')

@section('contenu')

<div id="main">


                <h3 class="panel-title">Classement</h3>
            
                <table class="table table-striped">
                <thead>
                <tr>
                    <th><span>Rang</span></th>
                    <th><span>Nom</span></th>
                    <th><span>Score</span></th>
                </tr>
                </thead>
                <?php $nombre_de_lignes=1; ?>
                @foreach($name_score as $score)
                <tbody>
                <tr>
                    <td><?php echo $nombre_de_lignes;?></td>
                    <td><?php echo $score->pseudo?></td>
                    <td><?php echo $score->score?></td>
                </tr>
                </tbody>
                    <?php $nombre_de_lignes++?>
                @endforeach
            </table>
            <br><br>

</div>

@endsection
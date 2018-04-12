@extends('template')

@section('contenu')

<head>		
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
</head>

<div id="main">


    <div class="panel-heading">Inscription</div>
<div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="{{ route('login') }}">
                            {{ csrf_field() }}


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Se connecter
                    </button>
                </div>
            </div>
    </div>
</div>
</div>
</div>

@endsection
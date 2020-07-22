@extends('layouts.base')

@section('content')
    <div class="container" style="opacity: 90%;">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('post_personne') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6" style="padding: 0px 0 50px 20px">
                                <h4 class="text-center" style="font-weight: bold">Informations sur l'utilisateur</h4><hr>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Pseudo</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Adresse e-Mail</label>

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
                                    <label for="password" class="col-md-4 control-label">Mot de passe</label>

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
                                    <label for="password-confirm" class="col-md-4 control-label">Confimation</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h4 class="text-center" style="font-weight: bold">Informations profile</h4><hr>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="nom" class="col-md-4 control-label">Nom</label>

                                    <div class="col-md-6">
                                        <input id="nom" type="text" class="form-control" name="nom" value="{{ old('nom') }}" required autofocus>

                                        @if ($errors->has('nom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('nom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="prenom" class="col-md-4 control-label">Prénom</label>

                                    <div class="col-md-6">
                                        <input id="prenom" type="text" class="form-control" name="prenom" value="{{ old('prenom') }}" required autofocus>

                                        @if ($errors->has('prenom'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('prenom') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="telephone" class="col-md-4 control-label">Téléphone</label>

                                    <div class="col-md-6">
                                        <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                        @if ($errors->has('telephone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('telephone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="adresse" class="col-md-4 control-label">Adresse</label>

                                    <div class="col-md-6">
                                        <input id="adresse" type="text" class="form-control" name="adresse" value="{{ old('adresse') }}" required autofocus>

                                        @if ($errors->has('adresse'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('adresse') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="offset-md-3 col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
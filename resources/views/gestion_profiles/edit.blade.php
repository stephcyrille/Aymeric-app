@extends('layouts.base')

@section('content')
    <div class="container" style="opacity: 90%;">
        <div class="offset-1 col-10 card" style="padding: 10px 20px">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Modifier le profile</h2>
          <div class="row">
            <div class="card-body">
                <form action="{{ route('mis_a_jour_profile', $profile->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}

                  <div class="row">
                    <div class="col-md-12">
                      <div class="col-md-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="nom" class="control-label">Nom</label>
                          <input 
                            id="nom" 
                            type="text" 
                            class="form-control" 
                            name="nom" 
                            value="{{ old('nom') ?? $profile->nom }}" 
                            required autofocus
                          />
                          @if ($errors->has('nom'))
                            <span class="help-block">
                              <strong>{{ $errors->first('nom') }}</strong>
                            </span>
                          @endif

                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="prenom" class="control-label">Prénom</label>
                          <input 
                            id="prenom" 
                            type="text" 
                            class="form-control" 
                            name="prenom" 
                            value="{{ old('prenom') ?? $profile->prenom }}" 
                            required autofocus
                          />
                          @if ($errors->has('prenom'))
                            <span class="help-block">
                              <strong>{{ $errors->first('prenom') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="telephone" class="control-label">Téléphone</label>
                          <input 
                            id="telephone" 
                            type="text" 
                            class="form-control" 
                            name="telephone" 
                            value="{{ old('telephone')?? $profile->telephone }}" 
                            required autofocus
                          />
                          @if ($errors->has('telephone'))
                            <span class="help-block">
                              <strong>{{ $errors->first('telephone') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="adresse" class="control-label">Adresse</label>
                          <input 
                            id="adresse" 
                            type="text" 
                            class="form-control" 
                            name="adresse" 
                            value="{{ old('adresse') ?? $profile->adresse }}" 
                            required autofocus
                          />
                          @if ($errors->has('adresse'))
                            <span class="help-block">
                              <strong>{{ $errors->first('adresse') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="role" class="control-label">Role</label>
                          <select name="role" id="role" class="form-control">
                            @foreach ($roles as $item)
                              <option {{ old('role', $profile->role) == $item ? 'selected' : '' }} value="{{ $item }}">{{ $item }}</option>                                
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group text-center" style="padding-top: 20px">
                    <input type="submit" class="btn btn-success" /> &nbsp; &nbsp;
                    <a href="{{ route('liste_profiles') }}" class="btn btn-secondary">
                      Annuler
                    </a>
                  </div>
                  
                </form>
              </div>
          </div>
        </div>
    </div>    
@endsection


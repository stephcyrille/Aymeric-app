@extends('layouts.base')

@section('content')
    <div class="container" style="opacity: 90%;">
        <div class="offset-1 col-10 card" style="padding: 10px 20px">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Ajouter un nouvel équipement</h2>
          <div class="row">
            <div class="card-body">
                <form action="{{ route('post_equipement') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-3">
                      <div class="form-group">
                        <label for="nom">Nom</label>
                        <input 
                          type="text" 
                          id="nom" 
                          name="nom" 
                          class="form-control" 
                          value="{{ old('nom') }}"
                          />
                        <div style="width: 100%; text-align: left; color:red">
                          <i style="font-size: 9px"> {{ $errors->first('nom') }} </i>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="fabriquant">Frabriquant</label>
                        <input 
                          type="text" 
                          id="fabriquant" 
                          name="fabriquant" 
                          class="form-control" 
                          value="{{ old('fabriquant') }}"
                        />
                        <div style="width: 100%; text-align: left; color:red">
                          <i style="font-size: 9px"> {{ $errors->first('fabriquant') }} </i>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="numero_serie">Numéro de serie</label>
                        <input 
                          type="text" 
                          id="numero_serie" 
                          name="numero_serie" 
                          class="form-control" 
                          value="{{ old('numero_serie') }}"
                        />
                        <div style="width: 100%; text-align: left; color:red">
                          <i style="font-size: 9px"> {{ $errors->first('numero_serie') }} </i>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="numero_model">Numéro du model</label>
                        <input 
                          type="text" 
                          id="numero_model" 
                          name="numero_model" 
                          class="form-control" 
                          value="{{ old('numero_model') }}"
                        />
                        <div style="width: 100%; text-align: left; color:red">
                          <i style="font-size: 9px"> {{ $errors->first('numero_model') }} </i>
                        </div>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="emplacement">Emplacement</label>
                        <input 
                          type="text" 
                          id="emplacement" 
                          name="emplacement" 
                          class="form-control" 
                          value="{{ old('emplacement') }}"
                        />
                        <div style="width: 100%; text-align: left; color:red">
                          <i style="font-size: 9px"> {{ $errors->first('emplacement') }} </i>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="frequence_maitenance">Fréquence de maintenance</label>
                        <select name="frequence_maitenance" id="frequence_maitenance" class="form-control">
                          <option value="" disabled>Fréquence de maintenace</option>
                          <option value="quotidienne">Quotidienne</option>
                          <option value="hebdomadaire">Hebdomadaire</option>
                          <option value="mensuelle">Mensuelle</option>
                          <option value="semestrielle">Semestrielle</option>
                          <option value="trimestrielle">Trimestrielle</option>
                          <option value="annuelle">Annuelle</option>
                        </select>
                        <div style="width: 100%; text-align: left; color:red">
                          <i style="font-size: 9px"> {{ $errors->first('frequence_maintenance') }} </i>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group text-center" style="padding-top: 20px">
                    <input type="submit" class="btn btn-success" /> &nbsp; &nbsp;
                    <a href="{{ route('liste_taches') }}" class="btn btn-secondary">
                      Annuler
                    </a>
                  </div>
                  
                </form>
              </div>
          </div>
        </div>
    </div>    
@endsection


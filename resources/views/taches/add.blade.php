@extends('layouts.base')

@section('content')
    <div class="container" style="opacity: 90%;">
        <div class="offset-1 col-10 card" style="padding: 10px 20px">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Ajouter une nouvelle tache</h2>
          <div class="row">
            <div class="card-body">
                <form action="{{ route('post_tache') }}" method="POST">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-4">
                      <div class="form-group">
                        <label for="libelle">Libéllé</label>
                        <input type="text" id="libelle" name="libelle" class="form-control" />
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="date_debut">Date de début</label>
                        <input type="date" id="date_debut" name="date_debut" class="form-control" />
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="form-group">
                        <label for="date_fin">Date de fin</label>
                        <input type="date" id="date_fin" name="date_fin" class="form-control" />
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="col-6">
                      <div class="form-group">
                        <label for="equipement_id">Equipement</label>
                        <select name="equipement_id" id="equipement_id" class="form-control">
                            @foreach ($equipements as $item)
                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="responsable_id">Technicien assigné</label>
                        <select name="responsable_id" id="responsable_id" class="form-control">
                          @foreach ($profiles as $item)
                            <option value="{{ $item->id }}">{{ $item->nom.' '.$item->prenom }}</option>
                          @endforeach
                        </select>
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


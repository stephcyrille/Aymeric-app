@extends('layouts.base')

@section('content')
    <div class="container" style="opacity: 90%;">
        <div class="offset-1 col-10 card" style="padding: 10px 20px">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Liste des équipements</h2>
          <div class="row">
            <div class="col-3">
                <a href="{{ route('ajout_equipement') }}" class="btn btn-primary" style="padding: 10px">
                  <i class="fa fa-plus"></i>
                  Ajouter un équipement
                </a>
            </div>
          </div>
          <div class="row">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <td scope="col">Nom</td>
                  <td scope="col">Fabriquant</td>
                  <td scope="col">numero de serie</td>
                  <td scope="col">Actions</td>
                </thead>
                <tbody>
                  @foreach ($equipements as $item)
                    <tr>
                      <td> {{ $item->nom }} </td>
                      <td> {{ $item->fabriquant }} </td>
                      <td> {{ $item->numero_serie }} </td>
                      <td>
                        <div class="btn-group">
                          <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                          </button>
                          <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">
                              Visualiser
                            </a>
                            <a href="#" class="dropdown-item">
                              Supprimer
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>    
@endsection


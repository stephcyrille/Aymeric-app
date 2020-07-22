@extends('layouts.base')

@section('content')
    <div class="container" style="opacity: 90%;">
        <div class="offset-1 col-10 card" style="padding: 10px 20px">
          <h2 style="padding-top: 40px; padding-bottom: 40px; text-transform: uppercase">Liste des tâches</h2>
          <div class="row">
            <?php $role = Auth::user()->profile->role;
      if ($role=="Technicien"){}else{
        ?>
            <div class="col-3">
                <a href="{{ route('ajout_tache') }}" class="btn btn-primary" style="padding: 10px">
                  <i class="fa fa-plus"></i>
                  Ajouter une nouvelle tâche
                </a>
            </div>
             <?php
       }
      ?>
          </div>
          <div class="row">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <td>Libelle</td>
                  <td>Equipement</td>
                  <td>Date debut</td>
                  <td>Date fin</td>
                  <td>Responsable</td>
                  <td>Actions</td>
                </thead>
                <tbody>
                  <tr>
                      
                      
                      
                      
                      
                      
                      @foreach ($taches as $item)
                      <tr>
                        <td> {{ $item->libelle }} </td>
                        <td> {{ $item->equipement_id }} </td>
                        <td> {{ $item->date_debut }} </td>
                        <td> {{ $item->date_fin }} </td>
                        <td> {{ $item->responsable_id }} </td>
                        <td>
                          <div class="btn-group">
                            <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu">
                              <a href="#" class="dropdown-item">
                                Visualiser
                              </a>
                              <?php $role = Auth::user()->profile->role;
                                 if ($role=="Technicien"){}else{
                              ?>
                              <a href="#" class="dropdown-item">
                                Supprimer
                              </a>
                               <?php
                                 }
                               ?>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>    
@endsection


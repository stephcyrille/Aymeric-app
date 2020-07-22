@extends('layouts.base')


@section('content')

    <div class="container" style="opacity: 90%;">
        <div class="col">
        <h3>Tous les Services</h3>
            <a href="{{ route('add_service') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i>
                Ajouter un service
            </a>
            <span class="mb-0 mt-6" id="infoAlert"></span>
            <div class="card card-small mt-4 p-4 mb-4"> 
              
                <table class="table table-striped">

                    <thead>
                      <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Code</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($all_services as $item)
                        <tr>
                          <td> {{ $item->nom }}</td>
                          <td> {{ $item->code }} </td>
                          <td> 
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true", aria-expanded="false">
                                Action
                              </button>
                              <div class="dropdown-menu">
                                <a href="/courrier/single/{{ $item->id }}/valid" class="dropdown-item">
                                  Consulter
                                </a>
                                <a href="/courrier/single/{{ $item->id }}/delete" class="dropdown-item">
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
@endsection
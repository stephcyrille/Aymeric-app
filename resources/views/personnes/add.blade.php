@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-6">
                <form action="{{ route('import_person') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nom">Fichier excel</label>
                                <input type="file" id="selected_file" name="selected_file" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" value="Enregistrer" class="btn btn-success btn-md"  />
                            <a href="#" class="btn btn-danger btn-md">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
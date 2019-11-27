@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-6">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nom">Nom du service</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('name') }}" />
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="code">Code du service</label>
                                <input type="text" class="form-control" id="code" name="code" value="{{ old('code') }}" />
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
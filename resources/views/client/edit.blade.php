@extends('layout.client')

@section('content')
<div class="home-content">
    <div class="d-flex col-md-12 justify-content-center">
        <div class="card col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
            <h3 class="text-success mt-2" align="center">Mise à jour client</h3>
            <div class="card-body">
                
            <form action="{{route('update_client')}}" method="POST">  
                @csrf
                <input type="hidden" name="id" value="{{ $client->id_cli}}">
                <div class="form-group">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="{{$client->nom_cli}}">
                </div>
                <div class="form-group">
                  <label for="">Prenom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" value="{{$client->prenom_cli}}">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{$client->adrs_cli}}">
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{$client->num_cli}}">
                </div>
                
                <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>
              </form>
            </div>
        </div>
        </div>
    </div>

@endsection

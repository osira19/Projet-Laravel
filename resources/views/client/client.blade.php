@extends('layout.client')

@section('content')
<div class="home-content">
    <div class="d-flex col-md-12 justify-content-center">
        <div class="card col-md-3">
            <div class="card-body">
                <h3 class="text-info" align="center">Formulaire d'ajout</h3>
            <form action="{{route('add_client')}}" method="post">  
                @csrf
                <div class="form-group">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom"  placeholder="Enter nom du client">
                </div>
                <div class="form-group">
                  <label for="">Prenom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Enter prenom du client">
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Enter adresse du client">
                </div>
                <div class="form-group">
                    <label for="">Contact</label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Enter numero du client">
                </div>
                
                <button type="submit" class="btn btn-outline-info"><i class="icon-plus"></i> Ajouter</button>
              </form>
            </div>
        </div>
        <div class="card col-md-9 ml-2">
          <div class="card-body">
            <h3 class="text-info" align="center" class="mt-5">Liste des clients</h3>
            <table class="table table-bordered mt-4">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client )
                    <tr>
                        <th scope="row">{{$client->id_cli}}</th>
                        <td>{{$client->nom_cli}}</td>
                        <td>{{$client->prenom_cli}}</td>
                        <td>{{$client->adrs_cli}}</td>
                        <td>{{$client->num_cli}}</td>
                        <td>
                            <a href="{{ route("achatlogement",[$client->id_cli]) }}"><button class="btn btn-outline-warning"><i class="icon-shopping-cart"></i></button></a>
                            <a href="{{ route("edit_client", [$client->id_cli]) }}"><button class="btn btn-outline-success"><i class="icon-edit"></i></button></a>
                            <a href="{{ route("delete_client", [$client->id_cli]) }}"><button class="btn btn-outline-danger"><i class="icon-trash-o"></i></button></a>
                        </td>
                    @endforeach
                  
                  </tr>
                </tbody>
              </table>  
        </div>
      </div>
    </div>
</div>   

@endsection
@extends('layout.utilisateur')

@section('content')
<div class="home-content">
    <div class="d-flex col-md-12 justify-content-center">
        <div class="card col-md-6 shadow-lg p-3 mb-5 bg-white rounded">
            <h3 class="text-success mt-2" align="center">Mise à jour utilisateur</h3>
            <div class="card-body">
                
            <form action="{{route('update_user')}}" method="POST">  
                @csrf
                <input type="hidden" name="id" value="{{ $user->id}}">
                <div class="form-group">
                  <label for="">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" value="{{$user->nom}}">
                </div>
                <div class="form-group">
                  <label for="">Prenom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" value="{{$user->prenom}}">
                </div>
                <div class="form-group">
                    <label for="">isAdmin</label>
                    <input type="text" class="form-control" id="admin" name="admin" value="{{$user->isAdmin}}">
                </div>
                <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>
              </form>
            </div>
        </div>
        </div>
    </div> 
@endsection
@extends('layout.utilisateur')

@section('content')
<div class="home-content">
    <div class="d-flex col-md-12 justify-content-center mt-3">
        <div class="card col-md-12">
                <h3 class="text-info mt-3" align="center">Listes des utilisateurs</h3>
            <table class="table mt-3">
                <thead>
                  <tr>
                    <th scope="col">Lib_agence</th>
                    <th scope="col">Adrs_agence</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Province</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($users as $user )
                   <tr>
                    <td>{{$user->lib_agence}}</td>
                    <td>{{$user->adrs_agence}}</td>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->num_user}}</td>
                    <td>{{$user->nom_province}}</td>
                    <td>{{$user->isAdmin}}</td>
                    <td>
                        <a href="{{route('edit_user',[$user->id]) }}"><button class="btn btn-outline-success"><i class="icon-edit"></i></button></a>
                        <a href=""><button class="btn btn-outline-danger"><i class="icon-trash-o"></i></button></a>
                    </td>
                    </tr>  
                   @endforeach
                </tbody>
              </table>  
        </div>
    </div>
</div>   
@endsection
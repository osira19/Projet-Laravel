@extends('layout.achat')

@section('content')
<div class="home-content">
  <div class="d-flex col-md-12  justify-content-center ">
      <div class="card col-md-12">
          <div class="card-body">
              <h3 align="center" class=" text-info mt-3" >Listes des achats</h3>
              <table class="table table-hover mt-4">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Client</th>
                      <th scope="col">Lib Agence</th>
                      <th scope="col">Adrs Agence</th>
                      <th scope="col">Description</th>
                      <th scope="col">Cite</th>
                      <th scope="col">Province</th>
                      <th scope="col">Prix</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($achatlistes as $achatlist )
                    <tr>
                      <th scope="row">{{$achatlist->id_achat}}</th>
                      <td>{{$achatlist->nom_cli}} {{$achatlist->prenom_cli}}</td>
                      <td>{{$achatlist->lib_agence}}</td>
                      <td>{{$achatlist->adrs_agence}}</td>
                      <td>{{$achatlist->apropos}}</td>
                      <td>{{$achatlist->lib_cite}}</td>
                      <td>{{$achatlist->nom_province}}</td>
                      <td>{{$achatlist->prix_lgmt}}</td>
                      <td><i class="icon-check" style="color:green"></i></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
      </div>
  </div>
</div>
@endsection
    
    
            
 
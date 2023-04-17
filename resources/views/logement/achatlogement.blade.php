@extends('layout.logement')

@section('content')
<div class="home-content">
    <div class="d-flex col-md-12  justify-content-center ">
        <div class="card col-md-12 mt-3">
            <div class="card-body">
                <h3 align="center" class="text-info">Listes des logements disponibles</span></h3>
                <table class="table table-hover mt-4">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Description</th>
                        <th scope="col">Agence</th>
                        <th scope="col">Adrs_agence</th>
                        <th scope="col">Cite</th>
                        <th scope="col">Province</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($logementlistes as $logementlist )
                      <tr>
                        <th scope="row">{{$logementlist->num_lgmt}}</th>
                        <td>{{$logementlist->apropos}}</td>
                        <td>{{$logementlist->lib_agence}}</td>
                        <td>{{$logementlist->adrs_agence}}</td>
                        <td>{{$logementlist->lib_cite}}</td>
                        <td>{{$logementlist->nom_province}}</td>
                        <td>{{$logementlist->prix_lgmt}}</td>
                        <td>
                          <button class="btn btn-outline-warning" onclick="test('{{$logementlist->id_agence}}','{{$logementlist->num_lgmt}}','{{$logementlist->apropos}}','{{$logementlist->lib_agence}}','{{$logementlist->adrs_agence}}','{{$logementlist->lib_cite}}','{{$logementlist->prix_lgmt}}')" data-toggle="modal" data-target="#achat" type="button"><i class="icon-shopping-cart"></i> Acheter</button>
                      </td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="achat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel"><b>Formulaire d'achat</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md-12">
        <form action="{{route('add_achat')}}" method="POST">  
          @csrf
          <input type="hidden" name="idcli" value="{{ $client->id_cli}}">
          <div class="form-group">
            <label for="">Client</label>
            <input type="text" class="form-control"  value="{{$client->nom_cli}} {{$client->prenom_cli}}">
          </div>
          <div class="form-group col-md-4">
            <input type="hidden" class="form-control" id="idag" name="idagence">
          </div>
          <div class="form-row ">
            <div class="form-group col-md-4">
                <label for="">Numero Logement</label>
                <input type="text" class="form-control" id="num" name="num">
            </div>
            <div class="form-group col-md-8">
              <label for="">Description</label>
              <input type="text" class="form-control" id="apropos">   
            </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="">Libellé agence</label>
            <input type="text" class="form-control" id="lib_ag"> 
          </div>
          <div class="form-group col-md-6">
            <label for="">Adresse agence</label>
            <input type="text" class="form-control" id="adrs_ag"> 
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Cité</label>
              <input type="text" class="form-control" id="cite">  
            </div>
            <div class="form-group col-md-6">
              <label for="">Prix logement</label>
              <input type="text" class="form-control" id="prix">   
            </div>
          </div>
          <div class="form-group jsutify-content-end">
              <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>
          </div>
      </form>
    </div>
    </div>
  </div>
</div>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@endsection
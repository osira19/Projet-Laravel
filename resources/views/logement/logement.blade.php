@extends('layout.logement')

@section('content')
<div class="home-content">
    <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-info my-2 my-sm-0 ml-3" data-toggle="modal" data-target="#logement" type="button"><i class="icon-plus"></i> Ajouter nouveau logement</button>
        <button class="btn btn-outline-success my-2 my-sm-0 ml-3" data-toggle="modal" data-target="#terrain" type="button"><i class="icon-plus"></i> Ajouter nouveau terrain</button>
    </form>
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
                        <th scope="col">N° Terrain</th>
                        <th scope="col">Surface</th>
                        <th scope="col">Prix</th>
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
                        <td>{{$logementlist->num_terrain}}</td>
                        <td>{{$logementlist->superficie}}</td>
                        <td>{{$logementlist->prix_lgmt}}</td>
                        <td>
                            <i class="icon-home" style="color:green;font-size:0.75cm"></i>
                        </td>
                      </tr> 
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel"><b>Ajout nouveau logement</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md-12">
        <form action="{{route('add_log')}}" method="POST">  
          @csrf
          <div class="form-group">
              <label for="">Description</label>
              <input type="text" class="form-control" id="descri" name="descri" placeholder="Inserer la description">
          </div>
          <div class="form-group">
            <label for="">Agence</label>
            <select name="id_agence" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              @foreach ($agencelistes as $agence)
                  <option value="{{$agence->id_agence}}" selected>{{$agence->lib_agence}}</option>
              @endforeach    
          </select>  
        </div>
        <div class="form-group">
          <label for="">Cite</label>
          <select name="id_cite" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            @foreach ($agencelistes as $agence)
              <option value="{{$agence->id_cite}}" selected>{{$agence->lib_cite}}</option>
            @endforeach      
        </select>  
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="">N° Terrain</label>
          <select name="numterrain" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            @foreach ($terrains as $terrain)
              <option value="{{$terrain->num_terrain}}" selected>{{$terrain->num_terrain}}</option>
            @endforeach      
        </select>  
      </div>
      <div class="form-group col-md-8">
        <label for="">Superficie</label>
        <select name="numterrain" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
          @foreach ($terrains as $terrain)
            <option value="{{$terrain->num_terrain}}" selected>{{$terrain->superficie}}</option>
          @endforeach      
      </select>  
    </div>
    </div>
      <div class="form-group">
          <label for="">Prix</label>
          <input type="text" class="form-control" id="prix" name="prix" placeholder="Inserer prix....">
      </div>
            <div class="form-group jsutify-content-end">
                <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>
            </div>
    </div>
      </form>
    </div>
    </div>
  </div>
</div>


<div class="modal fade" id="terrain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalLabel"><b>Ajout nouveau terrain</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('add_terr')}}" method="POST">  
          @csrf
          <div class="form-group">
              <label for="">Superficie du terrain</label>
              <input type="text" class="form-control" id="superficie" name="superficie" placeholder="Inserer la superficie">
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
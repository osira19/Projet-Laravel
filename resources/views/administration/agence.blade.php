<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Agences</title>
</head>
<body>
    <div class="sidebar bg-info">
        <div class="logo-details">
          <i class="bx bxl-c-plus-plus"></i>
          <span class="logo_name"><b><i class="icon-building-o"></i> Park Im.</b></span>
        </div>
        <ul class="nav-links mt-5">
            <li>
                <a href="/agence" class="active">
                <i class="bx bx-list-ul"></i>
                <span class="links_name"><b><i class="icon-cogs"></i> Administration</b></span>
                </a>
            </li>
            <li>
                <a href="/user">
                  <i class="bx bx-coin-stack"></i>
                  <span class="links_name"><b><i class="icon-user-circle"></i> Utilisateurs</b></span>
                </a>
            </li>
            <li>
                <a href="/client">
                  <i class="bx bx-coin-stack"></i>
                  <span class="links_name"><b><i class="icon-users"></i> Clients</b></span>
                </a>
            </li>
            <li>
                <a href="/achat">
                <i class="bx bx-box"></i>
                <span class="links_name"><b><i class="icon-shopping-cart"></i>  Achats</b></span>
                </a>
            </li>
            <li>
                <a href="/logement">
                <i class="bx bx-pie-chart-alt-2"></i>
                <span class="links_name"><b><i class="icon-building"></i> Logements</b></span>
                </a>
            </li>
            <li>
                <a href="/dashboard">
                <i class="bx bx-coin-stack"></i>
                <span class="links_name"><b><i class="icon-dashboard"></i> Dashboard</b></span>
                </a>
            </li>
            
            <li class="log_out">
                <a href="{{route('logout')}}">
                <i class="bx bx-log-out"></i>
                <span class="links_name"><b><i class="icon-sign-out"></i> Déconnexion</b></span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav class="">
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <h1 class="dashboard"><i class="icon-cogs"></i> Administration</h1>
              </div>
        </nav>
        <div class="home-content">
            <form class="d-flex mr-3 justify-content-end">  
                <button class="btn btn-outline-warning mr-2 " data-toggle="modal" data-target="#cite" type="button"><i class="icon-plus"></i> Ajouter Cité</button>
                <button class="btn btn-outline-success mr-2" data-toggle="modal" data-target="#province" type="button"><i class="icon-plus"></i> Ajouter Province</button>
            </form>
            <div class="d-flex col-md-12 justify-content-center mt-3">
                <div class="card col-md-12">
                    <div class="d-flex">
                        <div class="mt-3"><button class="btn btn-outline-info mr-2 " data-toggle="modal" data-target="#agence" type="button"><i class="icon-plus"></i> Ajouter Agence</button></div>
                        <div class="mt-3"><h3 class="text-info mt-2" style="margin-left: 10cm">Liste des agences</h3></div> 
                    </div>
                    <table class="table mt-3">
                        <thead>
                          <tr>
                            <th scope="col">id agence</th>
                            <th scope="col">Libellé agence</th>
                            <th scope="col">Adresse de l'agence</th>
                            <th scope="col">Nom du Province</th>
                            <th scope="col">Libellé Cité</th>
                            <!--<th scope="col">Action</th>-->
                          </tr>
                        </thead>
                        <tbody>
                           @foreach ($agencelistes as $agencelist )
                           <tr>
                            <th scope="row">{{$agencelist->id_agence}}</th>
                            <td>{{$agencelist->lib_agence}}</td>
                            <td>{{$agencelist->adrs_agence}}</td>
                            <td>{{$agencelist->nom_province}}</td>
                            <td>{{$agencelist->lib_cite}}</td>
                            <!--<td>
                                <a href=""><button class="btn btn-outline-success"><i class="icon-edit"></i> Modifier</button></a>
                                <a href=""><button class="btn btn-outline-danger"><i class="icon-trash-o"></i> Supprimer</button></a>
                            </td>-->
                            </tr>  
                           @endforeach
                        </tbody>
                      </table>  
                </div>
            </div>
        </div>  
    </section>

    <!-- Modal Cite-->
    
    <div class="modal fade" id="cite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h5 class="modal-title  text-white" id="exampleModalLabel" style="margin-left: 3.5cm"><b>Ajout nouveau cité</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form action="{{route('add_cite')}}" method="POST">  
                        @csrf
                        <div class="form-group">
                            <label for="">Libllé Agence</label>
                                <select name="id_agence" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    @foreach ($agences as $agence)
                                        <option value="{{$agence->id_agence}}" selected>{{$agence->lib_agence}}</option>
                                    @endforeach    
                                </select>   
                        </div>
                        <div>
                          <label for="">Libelle cité</label>
                          <input type="text" class="form-control" id="nom" name="lib_cite" placeholder="Libellé cité">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>
                        </div>
                    </form>
                    </div>
          </div>
        </div>
      </div>

      <!-- Modal Cite-->

      <!-- Modal Province-->

      <div class="modal fade" id="province" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header bg-success">
              <h5 class="modal-title text-white" id="exampleModalScrollableTitle" style="margin-left: 3cm"><b>Ajout nouveau Province</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{route('add_prov')}}" method="POST">  
                    @csrf
                    <div class="form-group">
                        <label for="">Nom du Province</label>
                        <input type="text" class="form-control" id="nom" name="nom_prov" placeholder="Inserer nom province">
                    </div>
                    <div class="form-group jsutify-content-end">
                        <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
      <!--Modal Province-->

      <!-- Modal Agence-->
    
    <div class="modal fade" id="agence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-info">
              <h5 class="modal-title  text-white" id="exampleModalLabel" style="margin-left: 3cm"><b>Ajout nouveau Agence</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form action="{{route('add_agence')}}" method="POST">  
                        @csrf
                        <div class="form-group">
                            <label for="">Libelle Agence</label>
                            <input type="text" class="form-control" id="nom" name="lib" placeholder="Inserer libellé agence">
                            </div>
                        <div class="form-group">
                          <label for="">Adresse Agence</label>
                          <input type="text" class="form-control" id="nom" name="adrs" placeholder="Inserer adresse agence">
                        </div>
                        <div class="form-group">
                            <label for="">Nom Province</label>
                                <select name="code_prov" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    @foreach ($provinces as $province)
                                        <option value="{{$province->code_province}}">{{$province->nom_province}}</option>  
                                    @endforeach
                                </select>   
                          </div>
                          <div class="form-group">
                          <button type="submit" class="btn btn-outline-success"><i class="icon-check"></i> Confirmer</button>  
                        </div>
                    </form>
          </div>
        </div>
      </div>

      <!-- Modal Agence-->

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
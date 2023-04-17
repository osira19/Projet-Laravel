<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar bg-info">
        <div class="logo-details">
          <i class="bx bxl-c-plus-plus"></i>
          <span class="logo_name"><b><i class="icon-building-o"></i> Park Im.</b></span>
        </div>
        <ul class="nav-links mt-5">
          <li>
            <a href="/agence">
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
                <a href="/agence">
                <i class="bx bx-list-ul"></i>
                <span class="links_name"><b><i class="icon-home"></i> Achats</b></span>
                </a>
            </li>
            <li>
                <a href="/logement">
                <i class="bx bx-pie-chart-alt-2"></i>
                <span class="links_name"><b><i class="icon-building"></i> Logements</b></span>
                </a>
            </li>
            <li>
                <a href="/dashboard" class="active">
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
        <nav>
            <div class="sidebar-button">
              <i class="bx bx-menu sidebarBtn"></i>
              <h1 class="dashboard"><i class="icon-dashboard"></i> Dashboard</h1>
            </div>
          </nav>
    
          <div class="home-content">
            <div class="overview-boxes">
              <div class="box ml-5">
                <div class="right-side">
                  <div class="box-topic"> Logements vendus</div>
                  @csrf
                  <div class="number text-success">{{$count}}</div> 
                </div>
              </div>
              <div class="box mr-5">
                <div class="right-side">
                  <div class="box-topic"> Logements Disponibles</div>
                  @csrf
                  <div class="number text-danger">{{$count2}}</div>
            </div>
              </div>
                
            </div>
        </div>
        <div class="d-flex col-md-12  justify-content-center ">
            <div class="card col-md-12">
                <div class="card-body">
                    <h3 align="center" class="text-info">Listes des logements vendus</h3>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">Description</th>
                            <th scope="col">Agence</th>
                            <th scope="col">Adrs_agence</th>
                            <th scope="col">Cite</th>
                            <th scope="col">Province</th>
                            <th scope="col">N° Terrain</th>
                            <th scope="col">Suraface</th>
                            <th scope="col">Prix</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($logementlistes as $logementlist )
                          <tr>
                            <td>{{$logementlist->apropos}}</td>
                            <td>{{$logementlist->lib_agence}}</td>
                            <td>{{$logementlist->adrs_agence}}</td>
                            <td>{{$logementlist->lib_cite}}</td>
                            <td>{{$logementlist->nom_province}}</td>
                            <td>{{$logementlist->num_terrain}}</td>
                            <td>{{$logementlist->superficie}}</td>
                            <td>{{$logementlist->prix_lgmt}}</td> 
                            <td><i class="icon-check" style="color:green"></i></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>


        
    </section>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
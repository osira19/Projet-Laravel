<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Utilisateur</title>
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
                <a href="#" class="active">
                  <i class="bx bx-coin-stack"></i>
                  <span class="links_name"><b><i class="icon-user-circle"></i> Utilisateurs</b></span>
                </a>
            </li>
            <li>
                <a href="/client" >
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
                <h1 class="dashboard"><i class="icon-user-circle"></i> Utilisateurs</h1>
              </div>
        </nav>
        
        @yield('content')
    </section>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
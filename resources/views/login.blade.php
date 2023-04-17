<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('icomoon.css')}}">
    <title>Connexion</title>
</head>
<body style="background-color: whitesmoke">
    <nav class="navbar navbar bg-info justify-content-center">
        <a class="navbar-brand" href="#" style="color:white"><b><span class="icon-building-o"></span> PARC IMMOBILIER</span></b></a>
    </nav>
    <h1 align="center" class="mt-5"><b>Connectez-vous !!</b></h1>
    <div class="d-flex align-items-center  justify-content-center mt-4 ">
      <div class="card col-md-4 shadow-lg p-3 mb-5 bg-white rounded" >
        <div class="card-body">
    <form class="" action="{{route('check_login')}}" method="post">
      @csrf
        <div class="form-group" class="col-md-4">
          <label for="exampleInputEmail1"><span class="icon-user"></span> Email</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entrer email">
        </div>
        <div class="form-group" class="col-md-4">
          <label for="exampleInputPassword1"><span class="icon-lock"></span> Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password"  placeholder="Entrer votre mot de passe">
        </div>
        <div class="form-row ml-0">
          <button type="button" class="btn btn-outline-success " data-toggle="modal" data-target="#exampleModalCenter"><span class="icon-user-plus"></span> Add User</button>
          <button type="submit" class="btn btn-outline-info ml-3"><span class="icon-check"></span> Connecter</button>
        </div>
    </form>
  </div>
  </div>
</div>

<!--Modal User-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title text-white" id="exampleModalCenterTitle"><b>Ajout nouveau utilisateur</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="{{route('add_user')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="">Libllé Agence</label>
                <select name="id_agence" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    @foreach ($agences as $agence)
                        <option value="{{$agence->id_agence}}" selected>{{$agence->lib_agence}}</option>
                    @endforeach    
                </select>   
            </div>
            <div class="form-group" class="col-md-4">
              <label for=""><span class="icon-user"></span> Nom</label>
              <input type="text" class="form-control" id="email" name="nom_user"  placeholder="Entrer nom">
            </div>
            <div class="form-group" class="col-md-4">
              <label for=""><span class="icon-user"></span> Prenom</label>
              <input type="text" class="form-control" id="email" name="prenom_user"  placeholder="Entrer prenom">
            </div>
            <div class="form-group" class="col-md-4">
              <label for="exampleInputEmail1"><span class="icon-inbox"></span> Email</label>
              <input type="email" class="form-control" id="email" name="email"  placeholder="Entrer email">
            </div>
            <div class="form-group" class="col-md-4">
              <label for=""><span class="icon-phone"></span> Contact</label>
              <input type="text" class="form-control" id="email" name="num_user" placeholder="Entrer numero">
            </div>
            <div class="form-group" class="col-md-4">
              <label for="exampleInputPassword1"><span class="icon-lock"></span> Mot de passe</label>
              <input type="password" class="form-control" id="password" name="password"  placeholder="Entrer votre mot de passe">
            </div>
            <div class="form-row ml-0">
              <button type="submit" class="btn btn-outline-info"><span class="icon-check"></span> Confirmer</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
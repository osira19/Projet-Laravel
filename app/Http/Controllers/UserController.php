<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserList;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = UserList::all();
        return view('utilisateur.user', compact('users'));
    }

    public function save(Request $req){
        $user = new User();
        $user->nom = $req->nom_user;
        $user->prenom = $req->prenom_user;
        $user->email = $req->email;
        $user->num_user = $req->num_user;
        $user->password = bcrypt($req->password);
        $user->id_agence = $req->id_agence;
        $user->save();

        return redirect(route('login'));
    }
    
    public function edit($id){
        $user = User::find($id);
        return view('utilisateur.edit', compact('user'));
    }

    public function update(Request $req){
        $user = User::find($req->id);
        $user->nom = $req->nom;
        $user->prenom = $req->prenom;
        $user->isAdmin = $req->admin;
        $user->save();
        return redirect(route('user'));
    }
}

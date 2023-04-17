<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();
        return view('client.client', compact('clients'));
    }

    public function save(Request $req){
        $client = new Client();
        $client->nom_cli = $req->nom;
        $client->prenom_cli = $req->prenom;
        $client->adrs_cli = $req->adresse;
        $client->num_cli = $req->numero;
        $client->save();
        return redirect(route('client'));
    }

    public function edit($id){
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }

    public function update(Request $req){
        $client = Client::find($req->id);
        $client->nom_cli = $req->nom;
        $client->prenom_cli = $req->prenom;
        $client->adrs_cli = $req->adresse;
        $client->num_cli = $req->numero; 
        $client->save();
        return redirect(route('client'));
    }

    public function delete($id){
        Client::find($id)->delete();
        return redirect(route('client'));
    }
}

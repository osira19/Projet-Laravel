<?php

namespace App\Http\Controllers;

use App\Models\Cite;
use App\Models\Agence;
use App\Models\Client;
use App\Models\Terrain;
use App\Models\Logement;
use App\Models\Province;
use App\Models\AgenceList;
use App\Models\LogementList;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index(){
        $agencelistes = AgenceList::all();
        $terrains = Terrain::all();
        $logementlistes = LogementList::all()->where('statut',0);
        return view ('logement.logement', compact('agencelistes','logementlistes','terrains'));
    }

    public function achatClient(Request $req){
        $agences = Agence::all();
        $cites =  Cite::all();
        $logements = Logement::all();
        $client = Client::all();
        $agencelistes = AgenceList::all();
        $logementlistes = LogementList::all()->where('statut',0);
        $client = Client::find($req->id);
        return view ('logement.achatlogement', compact('agences','cites','agencelistes','logementlistes','client','logements'));
    }

    public function save(Request $req){
        $log = new Logement();
        $log->apropos = $req->descri;
        $log->prix_lgmt = $req->prix;
        $log->id_agence = $req->id_agence;
        $log->id_cite = $req->id_cite;
        $log->num_terrain = $req->numterrain;
        $log->save();
        
        return redirect(route('logement'));
    }
}

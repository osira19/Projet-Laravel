<?php

namespace App\Http\Controllers;

use App\Models\Cite;
use App\Models\Achat;
use App\Models\Agence;
use App\Models\Logement;
use App\Models\Province;
use App\Models\AchatList;
use Illuminate\Http\Request;

class AchatController extends Controller
{
    public function index(){
        $agences = Agence::all();
        $cites =  Cite::all();
        $logements = Logement::all();
        $province = Province::all();
        $achatlistes = AchatList::all();
        return view('achat.achat', compact('achatlistes'));
    }

    public function save(Request $req){
        $achat = new Achat;
        $achat->num_lgmt = $req->num;
        $achat->id_cli= $req->idcli;
        $achat->id_agence = $req->idagence;
        $achat->save();
        $logement = Logement::find($req->num);
        $logement->statut = 1;
        $logement->save();
        return redirect(route('logement'));
    }
}

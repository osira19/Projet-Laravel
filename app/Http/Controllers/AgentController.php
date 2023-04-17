<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Province;
use App\Models\AgenceList;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){
       $agences = Agence::all();
       $provinces = Province::all();
       $agencelistes = AgenceList::all();
       return view('administration.agence', compact('agences','provinces','agencelistes'));
    }

    public function save(Request $req){
        $agence = new agence();
        $agence->lib_agence = $req->lib;
        $agence->adrs_agence = $req->adrs;
        $agence->code_province = $req->code_prov;
        $agence->save();

        return redirect(route('agence'));
    }
}

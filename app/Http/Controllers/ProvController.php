<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvController extends Controller
{
    
    public function save(Request $req){
        $province = new Province();
        $province->nom_province = $req->nom_prov;
        $province->save();
        return redirect(route('agence'));
    }
}

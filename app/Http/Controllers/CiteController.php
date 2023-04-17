<?php

namespace App\Http\Controllers;

use App\Models\Cite;
use Illuminate\Http\Request;

class CiteController extends Controller
{
    public function save(Request $req){
        $cite = new Cite();
        $cite->lib_cite = $req->lib_cite;
        $cite->id_agence = $req->id_agence;
        $cite->save();
        return redirect(route('agence'));
    }
}

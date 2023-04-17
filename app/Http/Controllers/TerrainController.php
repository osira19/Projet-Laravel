<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    public function save(Request $req){
        $terrain = new Terrain();
        $terrain->superficie = $req->superficie;
        $terrain->save();
        return redirect(route('logement'));
    }
}

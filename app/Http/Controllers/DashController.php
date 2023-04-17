<?php

namespace App\Http\Controllers;

use App\Models\LogementList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index(){
        $count = DB::table('achats')->count();
        $count2 = DB::table('logements')->where('statut',0)->count();
        $logementlistes = LogementList::all()->where('statut',1);
        return view('dashboard.dashboard', compact('count','count2','logementlistes'));
    }

    
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $agences = Agence::all();
        return view('login', compact('agences'));
    }

    public function check(Request $req){
        $user = User::where('email', $req->email)->first();
         if ($user) {
            if (Hash::check($req->password, $user->password)) {
                Auth::login($user);
                return redirect(route('client'));
            }
            else{
                abort(403);
            }
         }

    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }
}

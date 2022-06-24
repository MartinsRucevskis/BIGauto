<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function checkAdmin(Request $req){
        if(Auth::check($req)){
            return redirect('/dashboard');
        }
        else return view ('Admin');
    }
    function checkDashboard(Request $req){
        if(Auth::check($req)){
            return view('/dashboard');
        }
        else return redirect('/admin');
    }

    function dashboard(Request $req){
        // ".$req->epasts."\" LIMIT 1"));
        $user = (DB::select("SELECT * FROM users WHERE email=\"".$req->epasts."\""));
        if (!$user){
            return redirect()->back() ->with('jsAlert', 'Parole vasssssi epasts ir nepareizi!');
        }
        if(!Hash::check($req->parole, $user[0]->Parole)){
            return redirect()->back() ->with('jsAlert', 'Parole vai epasts ir nepareizi!');
        }
        else{
            Auth::loginUsingId($user[0]->id);;
            return redirect('/dashboard');
        }
    }
}

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
            return redirect()->back()->with('jsAlert', 'IT WORKS!');
        }
        if(!Hash::check($req->parole, $user[0]->Parole)){
            return redirect()->back()->with('jsAlert', 'IT WORKS!');
        }
        else{
            Auth::loginUsingId($user[0]->id);;
            return redirect('dashboard');
        }
    }

    public function create(Request $req){
        if(Auth::check()){
        $input = $req->all();
        DB::table('users')->insert(['Vards'=>$input['Vards'] ,'Uzvards' => $input['Uzvards'],
        'Limenis' => $input['Limenis'], 'Nummurs' => $input['Nummurs'] ,'Bilde' => $input['Bilde'], 'email' => $input['email'], 'Parole' => Hash::make($input['Parole'])]);
        return redirect("/dashboard");}
        else redirect("/admin");
    }
    public function delete(Request $req){
        if(Auth::check()){
        $userId = request()->route('id') ;
        $user = DB::table('users')->where("id", $userId);
        if($user[0]->Limenis < Auth::user()->Limenis ){
            DB::table('users')->where('id', $userId);
        }
        return redirect("/dashboard");}
        else return redirect("/admin");
    }
    public function logout(){
        Auth::logout();
        return redirect("/admin");
    }
    public function update(Request $req){
        if(Auth::check()){
        $userId = request()->route('id') ;
        $users = DB::select('SELECT * FROM users WHERE id ='.$userId);
        $user=$users[0];
        $input = $req->all();
        if($user->Limenis < Auth::user()->Limenis || (Auth::user()->Limenis==2 && $user->Limenis==2) ){
        DB::table('users')->where('id', $userId)->update(['Vards'=>$input['Vards'] ,'Uzvards' => $input['Uzvards'],
        'Nummurs' => $input['Nummurs'], 'Bilde' => $input['Bilde'], 'email' => $input['email'], 'Limenis' => $input['Limenis']]);}
        return redirect("/dashboard");}
        else return redirect("admin");
    }
}

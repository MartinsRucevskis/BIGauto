<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class CarController extends Controller
{
    function show(){
        $data = Car::all();
        return view('cars', ['cars'=>$data]);
    }
    public function index($id) 
    { 
    $data=Car::where('id','=',$id)->get(); 
    return view('car',['id'=>$id,'cars'=>$data]); 
    } 
    public function indexAdmin($id) 
    { 
    $data=Car::where('id','=',$id)->get(); 
    return view('editCar',['id'=>$id,'cars'=>$data]); 
    } 

    public function update(Request $req){
        if(Auth::check()){
        $carId = request()->route('id') ;
        $cars = DB::select('SELECT * FROM cars WHERE id ='.$carId);
        $car=$cars[0];
        $input = $req->all();
        DB::table('cars')->where('id', $carId)->update(['Razotajs'=>$input['Razotajs'] ,'Modelis' => $input['Modelis'],
        'Gads' => $input['Gads'], 'Tilpums' => $input['Tilpums'], 'Vietas' => $input['Vietas'], 'Atrumkarba' => $input['Atrumkarba'], 'VinKods' => $input['VinKods'],
        'Atrumu_skaits' => $input['Atrumu_skaits'], 'Degviela' => $input['Degviela'], 'Cena' => $input['Cena'],
        'Bilde' => $input['Bilde'], 'Piedzina' => $input['Piedzina'], 'Pardots' => $input['Pardots'], 'Apraksts' => $input['Apraksts']]);
        return redirect("/dashboard");}
        else return redirect("admin");
    }

    public function create(Request $req){
        if(Auth::check()){
        $input = $req->all();
        DB::table('cars')->insert(['Razotajs'=>$input['Razotajs'] ,'Modelis' => $input['Modelis'],
        'Gads' => $input['Gads'], 'Tilpums' => $input['Tilpums'], 'Vietas' => $input['Vietas'], 'Atrumkarba' => $input['Atrumkarba'], 'VinKods' => $input['VinKods'],
        'Atrumu_skaits' => $input['Atrumu_skaits'], 'Degviela' => $input['Degviela'], 'Cena' => $input['Cena'],
        'Bilde' => $input['Bilde'], 'Piedzina' => $input['Piedzina'], 'Pardots' => $input['Pardots'], 'Apraksts' => $input['Apraksts']]);
        return redirect("/dashboard");}
        else return redirect("admin");
    }

    public function delete(Request $req){
        if(Auth::check()){
        $carId = request()->route('id') ;
        DB::table('cars')->delete($carId);
        return redirect("/admincars");}
        else return redirect("admin");
    }
}

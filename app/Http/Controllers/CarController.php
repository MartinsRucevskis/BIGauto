<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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
    
}

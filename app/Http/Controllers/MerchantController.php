<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Merchants; 
use App\Models\Country; 

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) 
    { 
    $merchants=Merchants::where('country_id','=',$id)->get(); 
    return view('merchants',['country_id'=>$id,'merchants'=>$merchants]); 
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $country = Country::findOrFail($id);
        return view('merchant_new', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $merchants = new Merchants();
        $merchants->country_id = $request->country_id;
        $merchants->name = $request->name;
        $merchants->year_founded = $request->year_founded;
        $merchants->manager_name = $request->managers_name;
        $merchants->save();
        return redirect('merchant/country/' . $merchants->country_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
 {
 $country_id = Merchants::findOrFail($id)->country_id;
 Merchants::findOrFail($id)->delete();
 return redirect('merchant/country/' . $country_id);
 }
}

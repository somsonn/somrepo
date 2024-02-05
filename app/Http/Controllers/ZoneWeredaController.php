<?php

namespace App\Http\Controllers;

use App\Models\Zone_wereda;
use Illuminate\Http\Request;
use Illuminate\support\carbon;

class ZoneWeredaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function zone_wereda()
    {
        
        $city = zone_wereda::all();
        $show = 1;
        return view('admin.editcity',compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
     public function addzonewereda(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'level' => 'required',
            'region' => 'required',

        ]);
    
        
    
        $scale = zone_wereda::create([
            'name'=>$request->name,
            'level'=>$request->rate,
            'region' => $request->region,
            'desertalw'=>$request->desertalw,
            'created_at' => carbon::now()
        ]);
    
    
        return redirect()->back()->with('som',' zone_wereda added succesfully');
    }
    /**
     * Show the form for editing the specified resource.
     */

    public function editzone_wereda($id){

    $city = Zone_wereda::find($id) ;
    $showcapitalcity = 0;
    $showzone = 1;

    return view('admin.editcity',compact('city','showcapitalcity','showzone'));

}

    /**
     * Update the specified resource in storage.
     */
    public function updatezone_wereda(Request $request)
    {
        
    $zone_wereda = $request->validate([
        'name' => 'required',
        'level' => 'required',
        'region' => 'required',

    ]);

    if($request->has('check')){
        $chacked = true;
    }else{
        $chacked=false;
    }

    $id = $request->id;


    $data = zone_wereda::find($id)->update([
        'name'=>$request->name,
            'level'=>$request->level,
            'region' => $request->region,
            'desertalw'=>$chacked,
            'created_at' => carbon::now()
    ]);

    return redirect()->route('citylist')->with('success',' zone_wereda updated succesfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function removezone_wereda($id)
    {
        $zone_wereda = zone_wereda::find($id)->delete();
        return redirect()->back()->with('som',' zone_wereda removed succesfully');
    }
}

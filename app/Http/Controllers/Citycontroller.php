<?php

namespace App\Http\Controllers;
use App\Models\Scale;
use App\Models\Capital_city;
use App\Models\Zone_wereda;
use App\Models\City_scale;
use App\EthiopianCarbon;


use Illuminate\Http\Request;
use Illuminate\support\carbon;


class Citycontroller extends Controller
{
    
    public function index(){

        $scales = Scale::paginate(5);
        $cityscale = City_scale::paginate(5);
        return view('admin.index',compact('scales','cityscale'));
    }

    public function city(){

        $capitalcity = Capital_city::paginate(5);
        $zoneWereda = Zone_wereda::paginate(5);
        return view('admin.city',compact('capitalcity','zoneWereda'));
    }


    public function addscale(Request $request){
    $data = $request->validate([
        'scale_name' => 'required',
        'value' => 'required',
    ]);

    if($request->has('check')){
        $chacked = true;
    }else{
        $chacked=false;
    }


    $scale = Scale::create([
        'scale_name' => $request->scale_name,
        'value' => $request->value,
        'status' =>$chacked,
        'created_at' => carbon::now()
    ]);


    return redirect()->back()->with('success','new is scale added  succesusfully');
}

public function editscale($id){

    $scale = Scale::find($id);
    $show = 1;
    $cityscale=0;
    return view('admin.editescale',compact('scale','show','cityscale'));
}

public function updatescale(Request $request){
    $data = $request->validate([
        'scale_name' => 'required',
        'value' => 'required',
    ]);

    if($request->has('check')){
        $chacked = true;
    }else{
        $chacked=false;
    }

    $id = $request->id;


    $scale = Scale::where('id',$id)->update([
        'scale_name' => $request->scale_name,
        'value' => $request->value,
        'status' =>$chacked,
        'updated_at' => Carbon::now()
    ]);


    return redirect()->route('admin')->with('success','scale updated succesusfully');
}


  public function removescale($id){

        $cities = Scale::find($id)->delete();
        return redirect()->back();
    }




public function addcity(Request $request){
    $city = $request->validate([
        'city'=>'required',
        'level'=>'required',
    ]);

    if($request->has('check')){
        $chacked = true;
    }else{
        $chacked=false;
    }

    $data = City::insert([
        'city'=>$request->city,
        'level'=>$request->level,
        'desertalw'=>$chacked,
        'status'=>$chacked,
        'created_at'=>carbon::now()
    ]);

    return redirect()->back()->with('success','new city added succesusfully');

}

public function editcity($id){
    
    
    $city = Capital_city::find($id) ;
    $showcapitalcity = 1;
    $showzone = 0;

    return view('admin.editcity',compact('city','showcapitalcity','showzone'));

}



public function updatecity(Request $request){

    $city = $request->validate([
        'city' => 'required',
        'low' => 'required',
        'medium' => 'required',
        'high' => 'required',
    ]);

    if($request->has('check')){
        $checked = true;
    }else{
        $checked=false;
    }

    $id = $request->id;

    $data = capital_city::find($id)->update([
        'city_name' => $request->city,
        'low' => $request->low,
        'medium' => $request->medium,
        'high' => $request->high,
        'desertalw' => $checked,
        'status' => true,
        'updated_at' => Carbon::now()
    ]);

    return redirect()->route('citylist')->with('success','city updated succesusfully');
}

public function removecity($id){
    $city = Capital_city::find($id)->delete();
    return redirect()->back();
}

public function addnewscales(){
    return view('admin.addnewscale');
}

public function cityscaleexcell(){
    return view('admin.cityscalexcell');
}

public function newzoneworedaexcell(){
    return view('admin.zoneweredaexcell');
}

public function addcapitalcityexcell(){
    return view('admin.capitalciyexcell');
}
}

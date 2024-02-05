<?php

namespace App\Http\Controllers;
use App\Models\Scale;
use App\Models\capital_city;
use App\EthiopianCarbon;

use App\Models\zone_wereda;
use App\Models\city_scale;
use Illuminate\Http\Request;
use Illuminate\support\carbon;

class CapitalCityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $scales = Scale::all();
        return view('admin.index',compact('scales'));
    }



    public function addscale(Request $request){
    $data = $request->validate([
        'scale' => 'required',
        'rate' => 'required',
    ]);

    if($request->has('check')){
        $chacked = true;
    }else{
        $chacked=false;
    }
    $id = $request->id;
    $scale = Scale::create([
        'scale_name'=> $request->input('scale'),
        'value' => $request->input('rate'),
        'status' =>$chacked,
        'created_at' => carbon::now()
    ]);

if( $scale){
    return redirect()->back()->with('som',' scale added succesfully');

}
else{
    return redirect()->back()->with('som',' scale not added succesfully');

}


}

public function editscale($id){

    $scale = Scale::find($id);

    return view('admin.editescale',compact('scale'));

}

public function updatescale(Request $request){
    $data = $request->validate([
        'scale' => 'required',
        'rate' => 'required',
    ]);

    if($request->has('check')){
        $chacked = true;
    }else{
        $chacked=false;
    }

    $id = $request->id;


    $scale = Scale::where('id',$id)->update([
        'scale_name' => $request->scale,
        'value' => $request->rate,
        'status' =>$chacked,
        'updated_at' => Carbon::now()
    ]);


    return redirect()->route('admin')->with('som',' scale updated succesfully');;
}


  public function removescale($id){

        $cities = Scale::find($id)->delete();
        return redirect()->back()->with('som',' scale deleted succesfully');;
    }



    public function city(){
       
        $cities = capital_city::all();
        return view('admin.city',compact('cities'));
    }
    public function addcity(Request $request)
    {
        if ($request->has('check')) {
            $checked = true;
        } else {
            $checked = false;
        }
        $data = capital_city::create([
            'city_name' => $request->input('city'),
            'desertalw' => $checked,
            'low' => $request->input('low'),
            'medium' => $request->input('medium'),
            'high' => $request->input('high'),
            'status' => $checked,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('som', 'Capital_City added successfully');
    }
public function editcity($id){

    $city = capital_city::find($id);

    return view('admin.editcity',compact('city'));

}
public function updatecity(Request $request)
{
    $id = $request->id;

  //  dd($id);
    $city = $request->validate([
        'city' => 'required',
        'low' => 'required',
        'medium' => 'required',
        'high' => 'required',
    ]);

    if ($request->has('check')) {
        $checked = true;
    } else {
        $checked = false;
    }


    $data = capital_city::findOrFail($id)->update([
        'city_name' => $request->input('city'),
        'low' => $request->input('low'),
        'medium' => $request->input('medium'),
        'high' => $request->input('high'),
        'desertalw' => $checked,
        'status' => true,
        'updated_at' => Carbon::now()
    ]);
    return redirect()->route('citylist')->with('som', 'Capital_City updated successfully');
}
public function removecity($id){
    $city = capital_city::find($id)->delete();
    return redirect()->back()->with('som',' Capital_City removed succesfully');
}


public function zone_wereda()
{
    
    $zone_weredas = zone_wereda::all();
    return view('admin.zone_wereda',compact('zone_weredas'));
}

/**
 * Show the form for creating a new resource.
 */

 public function addzonewereda(Request $request){
    
    if ($request->has('check')) {
        $checked = true;
    } else {
        $checked = false;
    }
    
    $data = $request->validate([
        'name' => 'required',
        'level' => 'required',
        'region' => 'required',

    ]);


    $zone_wereda = zone_wereda::create([
        'name'=>$request->name,
        'level'=>$request->level,
        'region' => $request->region,
        'desertalw' => $checked,
        'created_at' => carbon::now()
    ]);


    return redirect()->back()->with('som',' zone_wereda added succesfully');
}
/**
 * Show the form for editing the specified resource.
 */
public function editzone_wereda($id)
{
    
$zone_wereda = zone_wereda::find($id);

return view('admin.editzone_wereda',compact('zone_wereda'));
}

/**
 * Update the specified resource in storage.
 */
public function updatezone_wereda(Request $request)
{
    $id = $request->id;
    $zone_wereda = $request->validate([
        'name' => 'required',
        'level' => 'required',
        'region' => 'required',
    ]);

    if ($request->has('check')) {
        $checked = true;
    } else {
        $checked = false;
    }

    $data = zone_wereda::find($id);
    dd($data);

    if ($data) {
        $data->update([
            'name' => $request->input('name'),
            'level' => $request->input('level'),
            'region' => $request->input('region'),
            'desertalw' => $checked,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('zone_weredalist')->with('som', 'zone_wereda updated successfully');
    } else {
        return redirect()->route('zone_weredalist')->with('err', 'zone_wereda not found');
    }
}

/**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $zone_wereda = zone_wereda::find($id)->delete();
    return redirect()->back()->with('som',' zone_wereda removed succesfully');
}









public function cityscale() {
        
    $cityscales = city_scale::all();
    return view('admin.cityscale',compact('cityscales'));
}

/**
 * Show the form for creating a new resource.
 */

 public function addcityscale(Request $request){
    $data = $request->validate([
        'region' => 'required',
        'level' => 'required',
        'low' => 'required',
        'medium' => 'required',
         'high'=>'required',

    ]);

    

    $scale = city_scale::create([
        'region' => $request->region,
        'level' => $request->level,
        'low'=>$request->low,
        'medium'=>$request->medium,
        'high'=>$request->high,
        'created_at' => carbon::now()
    ]);


    return redirect()->back()->with('som',' cityscale added succesfully');
}
/**
 * Show the form for editing the specified resource.
 */
public function editcityscale($id)
{
    
$editcityscale = city_scale::find($id);

return view('admin.editcityscale',compact('editcityscale'));
}

/**
 * Update the specified resource in storage.
 */
public function updatecityscale(Request $request)
{
    
$city = $request->validate([
    'region' => 'required',
    'level' => 'required',
    'low' => 'required',
    'medium' => 'required',
     'high'=>'required',

]);

$id = $request->id;

$data = city_scale::find($id)->update([
    'region'=>$request->region,
    'level'=>$request->level,
    'low'=>$request->low,
    'medium'=>$request->medium,
    'high'=>$request->high,
    'Updated_at'=>carbon::now()
]);

return redirect()->route('cityscalelist')->with('som',' cityscale updated succesfully');;
}

/**
 * Remove the specified resource from storage.
 */
public function removecityscale($id)
{
    $cityscale = city_scale::find($id)->delete();
    return redirect()->back()->with('som',' cityscale removed succesfully');
}

}

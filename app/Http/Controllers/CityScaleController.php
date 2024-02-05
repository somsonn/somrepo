<?php

namespace App\Http\Controllers;
use App\Models\City_scale;
use Illuminate\Http\Request;
use Illuminate\support\carbon;

class CityScaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cityscale() {
        
        $cityscales = CityScale::all();
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
    
        
    
        $scale = CityScale::create([
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
    public function editallcityscale($id)
    {
        
    $editcityscale = City_scale::find($id);

    $show = 0;
    $cityscale=1;
    return view('admin.editescale',compact('editcityscale','show','cityscale'));
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

    $data = City_scale::find($id)->update([
        'region'=>$request->region,
        'level'=>$request->level,
        'low'=>$request->low,
        'medium'=>$request->medium,
        'high'=>$request->high,
        'Updated_at'=>carbon::now()
    ]);

    return redirect()->route('admin')->with('som',' cityscale updated succesfully');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function removecityscale($id)
    {
        $cityscale = City_scale::find($id)->delete();
        return redirect()->back()->with('som',' cityscale removed succesfully');
    }
}

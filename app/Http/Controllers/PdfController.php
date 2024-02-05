<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Salary;
use App\Models\Scale;
use App\Models\City;
use App\Models\City_scale;
use App\Models\Capital_city;
use App\Models\Zone_wereda;
use App\Models\Histry;
use App\Imports\UsersImport;
use App\Imports\ImportZone_wereda;
use App\Imports\ImportCity_scale;
use App\Exports\Exportzoneweredas;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\Exportscales;
use PDF;




use Illuminate\Http\Request;

class PdfController extends Controller
{

    public function printpdf(Request $request)
    {
        $user  = Auth::guard('web')->user();
        $id = $user->id;
        $name = $user->name;


        $start_city = $request->start_city;
        $end_city = $request->end_city;

        $brake_fast = $request->brake_fast;
        $lanch = $request->lanch;

        
        $bf_value = Scale::where('scale_name','breakefast')->pluck('value')->first();
        $lanch_value = Scale::where('scale_name','lanch')->pluck('value')->first();
        $dinner_value = Scale::where('scale_name','dinner')->pluck('value')->first();
        $night_value = Scale::where('scale_name','night')->pluck('value')->first();


        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $date_diference = $request->date_diference;
        $start_day = explode("/",$start_date);


        $salary = Salary::where('user_id',$id)->first(); 
          $salaries = $salary ->salary;    
        $low_scale = Scale::where('scale_name', 'low')->pluck('value')->first();
        $high_scale = Scale::where('scale_name', 'high')->pluck('value')->first();



        $zw_standard_bf = Zone_wereda::where('name', $brake_fast)->first();
        $zw_standard_lanch = Zone_wereda::where('name', $lanch)->first();
        $zw_standard_dinner = Zone_wereda::where('name', $end_city)->first();

        $bf_price = 0;
        $lanch_price = 0;
        $dinner_price = 0;

        //drived calculations

        $guzo_value = ($bf_value + $lanch_value + $dinner_value) * 100; 
        $memeles = ($bf_value + $lanch_value) * 100 ;



        $cp_standard_bf = Capital_city::where('city_name', $brake_fast)->first();
        $cp_standard_lanch = Capital_city::where('city_name', $lanch)->first();
        $cp_standard_dinner = Capital_city::where('city_name', $end_city)->first();

        
        
        if($salaries >= $high_scale ){

        if($cp_standard_bf){
            $bf_price = $bf_value * $cp_standard_bf->high ;
            $lanch_pr = $lanch_value * $cp_standard_bf->high ;
        }else{
        $bf_price = City_scale::where('region', $zw_standard_bf->region)->where('level', $zw_standard_bf->level)->pluck('high')->first() * $bf_value;
        $lanch_pr = City_scale::where('region', $zw_standard_bf->region)->where('level', $zw_standard_bf->level)->pluck('high')->first() * $bf_value;
        }

        if($cp_standard_lanch){
            $lanch_price = $lanch_value * $cp_standard_lanch->high ;
            $bf_pr = $bf_value * $cp_standard_lanch->high ;
        }else{
        $lanch_price = City_scale::where('region', $zw_standard_lanch->region)->where('level', $zw_standard_lanch->level)->pluck('high')->first() * $lanch_value;
        $bf_pr = City_scale::where('region', $zw_standard_lanch->region)->where('level', $zw_standard_lanch->level)->pluck('high')->first() * $bf_value;
        }

        if($cp_standard_dinner){
            $dinner_price = $dinner_value * $cp_standard_dinner->high;
            $night_pr = $night_value * $cp_standard_dinner->high;
            $wuloabel = $cp_standard_dinner->high;
        }else{
        $dinner_price = City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('high')->first() * $dinner_value;
        $night_pr = City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('high')->first() * $night_value;
        $wuloabel =City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('high')->first();
        }

        

        }elseif($salaries <  $high_scale &&  $salaries > $low_scale ){

        if($cp_standard_bf){
            $bf_price = $bf_value * $cp_standard_bf->medium ;
            $lanch_pr = $lanch_value * $cp_standard_bf->medium ;
        }else{
        $bf_price = City_scale::where('region', $zw_standard_bf->region)->where('level', $zw_standard_bf->level)->pluck('medium')->first() * $bf_value;
        $lanch_pr = City_scale::where('region', $zw_standard_bf->region)->where('level', $zw_standard_bf->level)->pluck('medium')->first() * $bf_value;
        }

        if($cp_standard_lanch){
            $lanch_price = $lanch_value * $cp_standard_lanch->medium ;
            $bf_pr = $bf_value * $cp_standard_lanch->medium ;
        }else{
        $lanch_price = City_scale::where('region', $zw_standard_lanch->region)->where('level', $zw_standard_lanch->level)->pluck('medium')->first() * $lanch_value;
        $bf_pr = City_scale::where('region', $zw_standard_lanch->region)->where('level', $zw_standard_lanch->level)->pluck('medium')->first() * $bf_value;
        }

        if($cp_standard_dinner){
            $dinner_price = $dinner_value * $cp_standard_dinner->medium;
            $night_pr = $night_value * $cp_standard_dinner->medium;
            $wuloabel = $cp_standard_dinner->medium;
        }else{
        $dinner_price = City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('medium')->first() * $dinner_value;
        $night_pr = City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('medium')->first() * $night_value;
        $wuloabel =City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('medium')->first();
        }

        
            
        }else{

        if($cp_standard_bf){$bf_price = $bf_value * $cp_standard_bf->low ;
            $lanch_pr = $lanch_value * $cp_standard_bf->low ;
        }else{
        $bf_price = City_scale::where('region', $zw_standard_bf->region)->where('level', $zw_standard_bf->level)->pluck('low')->first() * $bf_value;
        $lanch_pr = City_scale::where('region', $zw_standard_bf->region)->where('level', $zw_standard_bf->level)->pluck('low')->first() * $bf_value;
        }

        if($cp_standard_lanch){
            $lanch_price = $lanch_value * $cp_standard_lanch->low ;
            $bf_pr = $bf_value * $cp_standard_lanch->low ;
        }else{
        $lanch_price = City_scale::where('region', $zw_standard_lanch->region)->where('level', $zw_standard_lanch->level)->pluck('low')->first() * $lanch_value;
        $bf_pr = City_scale::where('region', $zw_standard_lanch->region)->where('level', $zw_standard_lanch->level)->pluck('low')->first() * $bf_value;
        }

        if($cp_standard_dinner){
            $dinner_price = $dinner_value * $cp_standard_dinner->low;
            $night_pr = $night_value * $cp_standard_dinner->low;
            $wuloabel = $cp_standard_dinner->low;
        }else{
        $dinner_price = City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('low')->first() * $dinner_value;
        $night_pr = City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('low')->first() * $night_value;
        $wuloabel =City_scale::where('region', $zw_standard_dinner->region)->where('level', $zw_standard_dinner->level)->pluck('low')->first();
        }

        

        }





        $desert = Capital_city::where('city_name',$end_city)->pluck('desertalw')->first()
        || Zone_wereda::where('name',$end_city)->pluck('desertalw')->first();
        if( $desert ){
            $desertalw = Scale::where('scale_name','yeberehAbel')->pluck('value')->first();
        }else{
            $desertalw = Scale::where('scale_name','noyeberehAbel')->pluck('value')->first();
        }


        $guzo_price = $bf_price + $lanch_price + $dinner_price;
        $memeles_price = $bf_pr + $lanch_pr; 
        $night_price = $night_pr;

        $wuloabel = $wuloabel * ($date_diference - 1);


        return view('printedpage' ,compact('name','salary','start_city','end_city','brake_fast','lanch','start_date','end_date','date_diference','guzo_value','guzo_price','memeles','desertalw','memeles_price','night_value','night_price','start_day','wuloabel'));
    }

    public function createhistry(Request $request){
        $id = Auth::guard('web')->id();

        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $formattedStartDate = explode("/",$start_date);
        $formattedEndDate = explode("/",$end_date); 
        
        $st_date = $formattedStartDate[1]."/".$formattedStartDate[0]."/".$formattedStartDate[2];
        $en_date = $formattedEndDate[1]."/".$formattedEndDate[0]."/".$formattedEndDate[2];

        $data = Histry::insert([
            'user_id'=>$id,
            'start_date'=>$st_date,
            'end_date'=>$en_date,
            'mission'=>'x'
        ]);

        return redirect()->route('homepage');
    }

    public function excellupload(){
        return view('excell.index');
    }

    public function upload_excel(Request $request)
{   
     Excel::import(new UsersImport, request()->file('file'));

    return back();
}

public function downloadExcel()
{
  return Excel::download(new UsersExport, 'cities.xlsx');
}


    public function  importzonewereda(Request $request)
{   
     Excel::import(new ImportZone_wereda, request()->file('file'));

    return back();
}
public function exportzonewereda()
{
  return Excel::download(new Exportzoneweredas, 'zoneworeda.xlsx');
}




    public function  importcityscale(Request $request)
{   
     Excel::import(new ImportCity_scale, request()->file('file'));

    return back();
}
public function exportcityscale()
{
  return Excel::download(new Exportscales, 'cityscale.xlsx');
}


public function generatePDF()
{
    $data = [
        'title' => 'ወደ አካውንት ይግቡ fgdfgdfgdfg',
    ];

    $pdf = PDF::loadView('userlogin.login', $data);
    
    return $pdf->download('itsolutionstuff.pdf');
}


}

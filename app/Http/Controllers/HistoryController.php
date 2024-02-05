<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\support\carbon;

class HistoryController extends Controller
{
   
public function index(){
    $history = History::all();
    return view('index',compact('history'));
}

public function addhistory(Request $request){
  
    $data = $request->validate([
        'start_date' => 'required',
        'end_date' => 'required',
    ]);
    $user = Auth::guard('web')->id();

    $history = History::insert([
        'user_id'=>$user,
        'start_date'=> $request->start_date,
        'end_date'=>$request->end_date,
        'created_at' => carbon::now(),
    ]);

    return redirect()->back()->with('som',' history added succesfully');
}
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Capital_city;
use App\Models\Zone_wereda;
use App\Models\Salary;
use App\Models\Scale;
use App\Models\User;
use App\Models\Admin;
use App\Models\Histry;
use App\EthiopianCarbon;



use Illuminate\Http\Request;

class AllowanceController extends Controller
{
    public function index(){

        $user = Auth::guard('web')->user();
        $id = $user->id;

        $capitalcity = Capital_city::all();
        $cities = Zone_wereda::all();
        $datehistry = Histry::where('user_id',$id)->get();

        $ethiomonth = ['መስከረም','ጥቅምት','ኅዳር','ታኅሳስ','ጥር','የካቲት','መጋቢት','ሚያዝያ','ግንቦት','ሰኔ','ሐምሌ','ነሐሴ','ጷጉሜን'];
        
        //$user = User::with('salary')->get();

        return view('index', compact('cities','datehistry','ethiomonth','capitalcity'))->with('success','login succesusfully');
    }

    public function registerpage()
    {
        return view('login.registration');
    }

    public  function register(Request $request):RedirectResponse
    {

        $validatedData = $request->validate([
            'name'=>'required|min:6',
            'email'=>'email',
            'password'=>'required|min:4'
        ]);


        $user = Admin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

  return redirect()->back()->with('success','admin register succesusfully');
        


    }

    public function loginpage(){
        return view('login.login');
    }

    


     public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|min:6',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin')->with('success','admin login succesusfully');
        }

        return back()->withErrors(['message' => 'Invalid login credentials']);
    }




    //user register

    public function userregisterpage(){
        return view('userlogin.registeration');
    }

    public  function userregister(Request $request){

        $validatedData = $request->validate([
            'name'=>'required|min:6',
            'email'=>'email',
            'password'=>'required|min:4'
        ]);


        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->back()->with('success','user register succesusfully');


    }

    


    //user login

    public function userloginpage(){
        return view('userlogin.login');
    }


     public function userlogin(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|min:6',
            'password' => 'required|min:4'
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success','user login succesusfully');
        }

        return back()->withErrors(['message' => 'Invalid login credentials']);
    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('loginpage')->with('success','loginout succesusfully');
    }




    public function userlogout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('userloginpage')->with('success','loginout succesusfully');
    }


    public function salarypage($id){

        $u_id = Auth::guard('web')->id();
        $id = $id;

        if($id == 5){

            $datehistry = Histry::where('user_id',$u_id)->paginate(5);
    
            $show = 0;
            $hidden = 1;
            $ethiomonth = ['መስከረም','ጥቅምት','ኅዳር','ታኅሳስ','ጥር','የካቲት','መጋቢት','ሚያዝያ','ግንቦት','ሰኔ','ሐምሌ','ነሐሴ','ጷጉሜን'];
            return view('salary',compact('datehistry','ethiomonth','hidden','show'));

        }else{
            $hidden = 0;
            $show = 1;
            return view('salary',compact('hidden','show'));
 
        }
    }

    public function addsalary(Request $request){
        $salary = $request->validate([
            'salary'=>'required'
        ]);

        $user = Auth::guard('web')->id();


        $data = Salary::where('user_id',$user)->update([
            'user_id'=>$user,
            'salary'=>$request->salary
        ]);

        return redirect()->route('homepage')->with('success','succesusfully added salary');
    }


    
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\Auth\LoginRequestt;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create(){
        return view('admin.users.create');
    }
    public function store(UserRequest $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => Hash::make($request->password),
        ]);

    return redirect()->route('users.index')->with('success','تم الاضافة بنجاح');

    }
    public function edit($id){
        $user=User::findOrFail($id);
        return view('admin.users.edit',compact('user'));
    }
    public function update(UserRequest $request,$id){
       // dd($request->all());
        $user=User::findOrFail($id);
        if($request->password == null){
            $password = $user->password;
        }
        else{
        $password =Hash::make($request->password);
    }
       $user = User::whereId($id)->update([
        'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'password' => $password,
    ]);

return redirect()->route('users.index')->with('success' ,'تم التعديل بنجاح');
    }
    public function destroy($id){
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success','تم الحذف بنجاح');
    }

    public function users_login(){
        return view('register.login');
    }
    // protected function credentials(\Illuminate\Http\Request $request)
    // {
    //     return ['phone' => $request->phone, 'id_number' => $request->id_number];
    // }
    public function user_logout(Request $request)
    {
       
        Auth::guard('application')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/register');
    }
    public function user_login(Request $request)
    {
        //dd($request->all());
        $validator = Validator($request->all(), [
            // 'email' => 'required|email|exists:admins,email',
            'id_number' => 'required',
            'phone' => 'required',
        ]);
        $id_number = $request->id_number; 
        $user = Application::where('id_number', $id_number)->first();    
        if ($user) {    
         Auth::guard('application')->login($user);    
          return redirect()->route('dashboard.index');    
        }
        else {    
          return redirect()->back();    
        } 
        // if (!$validator->fails()) {
        //     // $credentials = [
        //     //     'id_number' => $request->input('id_number'),
        //     //     'phone' => $request->input('phone'),
        //     // ];
        //     // $credentials = $request->only('id_number', 'phone');

        //     // ه(Auth::attempt(['hostname' => $hostname]))
        // //    if(Auth::guard('application')->attempt($credentials, $request->input('remember'))){
        // //   dd('d');
        //     $request->session()->regenerate();

        //     return redirect()->intended(RouteServiceProvider::HOME);
        //   //  return redirect()->route('users.index')->with('success','تم  بنجاح');
 
        //    }
            
        // }

//         $validator = Validator($request->all(), [
//             'id_number'   => 'required',
//             'phone' => 'required'
//         ]);

//         if (Auth::guard('application')->attempt(['id_number' => $request->id_number, 'phone' => $request->phone], $request->get('remember'))) {
// dd('dd');
//         $request->session()->regenerate();

//         return redirect()->intended(RouteServiceProvider::HOME);
//         }
//         return back()->withInput($request->only('id_number', 'remember'));
    }

}

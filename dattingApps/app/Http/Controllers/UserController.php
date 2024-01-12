<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function index(){
        
        return view('login');
    }
public function login(){
        return view('login');
    }
public function loginPost(Request $request){
        // $email = $request->email;
        // $password = $request->password;
    $credensial = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);
    if(Auth::attempt($credensial)){
        $request->session()->regenerate();
        return redirect('/');
    }else{
        return redirect('login')->with('alert','Email atau Password anda salah!');
    }

// $data = User::where('email',$email)->first();
//         if($data){ //apakah email tersebut ada atau tidak
//             if(Hash::check($password,$data->password)){
//                 Session::put('name',$data->name);
//                 Session::put('email',$data->email);
//                 Session::put('login',TRUE);
//                 return redirect('/');
//             }
//             else{
//                 return redirect('login')->with('alert','Email atau Password anda salah!');
//             }
//         }
//         else{
//             return redirect('login')->with('alert','Email atau Password anda salah!');
//         }
    }
public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('login')->with('alert','Anda telah logout');
    }
public function register(){
        return view('register');
    }
public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);
$data =  new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Anda berhasil register');
    }
}
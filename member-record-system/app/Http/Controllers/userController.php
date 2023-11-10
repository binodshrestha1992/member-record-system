<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    // Login Function /
    public function login(Request $request){
        $user = User::where("email", "=", $request->input("email"))->first();
        $password = $request->input("password");
    
        if($user){
            $hashedPassword = $user->password;
            if(Hash::check($password, $hashedPassword)){
                $session_user = session('user', []);
                $session_user['email']= $user->email;
                $session_user['name']= $user->name;
                session()->put('user', $session_user);
                return redirect("/user/list");
            }else{
                return redirect("/");
            }
            
        }else{
            return redirect("/");
        }
    }

   //
    public function index(){
        try{
            if(session()->has("user")){
            $users = User::all();
            return view('index', ['users'=> $users]);}else{
                return redirect('/');
            }
        }catch (\Exception $e){
            return $e;
        }
    }
    /* Create user page */
    public function create(){
        return view('create');
    }
    /* Store user in database */
    public function store(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $data = [
            'name'=> $name,
            'email'=> $email,
            'password'=> bcrypt($password),
        ];
        User::create($data);
        $session_user = session('user', []);
        $session_user['email']= $email;
        $session_user['name']= $name;
        session()->put('user', $session_user);
        return redirect('/user/list');
    }

    /* Logout direction */
    public function logout(Request $request){
        session()->forget('user');
        return redirect('/');
    }
}
  

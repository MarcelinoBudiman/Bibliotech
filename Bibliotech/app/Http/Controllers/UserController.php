<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function createLoginPage(){
        return view('auth.login');
    }

    public function createRegisterPage(){
        return view('auth.register');
    }

    //LOGIN
    public function storeSession(Request $request){

        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;

        $creds = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $valid = auth()->attempt($creds);
        if($valid) {
            if($remember){
                Cookie::queue('email', $email, 60);
                Cookie::queue('password', $password, 60);
            }

            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        // Supaya ntar bisa di catch ama message bukan error
        return back()->with('loginError', 'Login Failed!');
    }

    //LOGOUT
    public function destroySession(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }

    //REGISTER
    public function storeUser(Request $request){

        $validate = $request->validate([
            // Required disini untuk jaga jaga jika tembus di required form
            'name' => 'required|unique:users|regex:/^[a-zA-Z ]*$/',
            'email' => 'email:dns|required|unique:users',
            'password' => 'required|min:5|max:20',
            'address' => 'required|min:5|max:95',
        ]);

        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);

        return view('auth.login');

    }

}

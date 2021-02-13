<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginView()
    {
        if (session('user')) {
            return redirect('/dashboard');
        }
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('user', $user);
                return redirect('/dashboard');
            }else{
                return redirect()->back()->with('error', 'Password does not match .');
            }
        } else {
            return redirect('/register')->with('error', 'Email is not registered .');
        }
    
    }
}

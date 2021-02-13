<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerView()
    {
        if (session('user')) {
            return redirect('/dashboard');
        }
        return view('authentication.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if ($request->password === $request->password_confirmation) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            $request->session()->put('user', $user);

            return redirect('/login');
        } else {
            return redirect()->back()->with('error', 'Password and Confirm password does not match .');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\UserAuth;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_auths,email|max:255',
            'password' => 'required|string',
        ]);

        $user = new UserAuth();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();


        return redirect('/login')->with('success','Registration successful! Please log in.');
    }

    public function login(Request $request){
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('user'); //redirect to home
        }
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request){

        auth()->logout();

        // Invalidate the session and regenerate token for security
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success','You have been logged out.');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function users()
    {
        $users = User::all();
        return view('users.users')->with(compact('users'));
    }

    public function authenticate(Request $request)
    {
        // $user = User::where('username', $request->username)->first();
        // $uuser_name = $request->username;
        // $ppassword = $request->password;

        // if($user == null)
        // {
        //     $error = 'No such User';
        //     return view('auth.login', compact('error'));
        // }

        // if ($user && Hash::check($ppassword, $user->password)) 
        // {
        //     return redirect('/dashboard');
        // }else{
        //     $errors = ["Incorrect Credentials"];
        //     return view('auth.login',compact('errors'));
        // }

        $user = Auth::attempt([
            'username' => $request->username, 
            'password' => $request->password
        ]);

        if ($user) {
            return redirect('/dashboard');
        }else{
            return view('auth.login');
        }
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone 
        ]);
        
        return redirect('register')->with('success', 'User Registered');
    }

    public function edit($id)
    {
        $user = User::findOrfail($id);
        return view('users.edit')->with(compact('user'));
    }

    public function update(Request $request, $id)
    {
        User::findOrFail($id)->update([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone 
        ]);

        return redirect('/users');
    }

    public function delete($id)
    {
        User::findOrFail($id)->delete();
        return redirect('users');
    }
}

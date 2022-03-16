<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function save(Request $request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }

    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return "username/password is not valid";
        } else {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }

    function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}

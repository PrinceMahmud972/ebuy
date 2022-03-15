<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function login(Request $request)
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

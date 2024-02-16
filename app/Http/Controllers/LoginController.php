<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function login()
    {
        session([
            'key' => 'value'
        ]);

        dd(session()->has('key'));

        dd(request()->session()->all());

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'identity' => ['required'],
            'password' => ['required'],
        ]);



        // Auth::attempt(['email' => $email, 'password' => $password]);

        $users = Http::get('https://dummyjson.com/users')->json();

        foreach ($users as $user) {
            if (
                $credentials['identity'] == $user['nim']
                &&
                $credentials['password'] == $user['pin']
            ) {
                return redirect(route('dashboard'));
            } else {
                return response()->json(['message' => 'Failed'], 401);
            }
        }

        // dd($user);

        // return collect($users);
    }
}

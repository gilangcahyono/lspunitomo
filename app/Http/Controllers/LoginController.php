<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->merge([
            'username' => trim($request->input('username')),
            'password' => trim($request->input('password')),
        ]);

        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $userFromDb = User::where('username', $credentials['username'])->where('password', $credentials['password'])->first();

        if ($userFromDb) {

            Auth::login($userFromDb);

            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        } else {

            // $userFromApi = getStudents()->where('nim', $credentials['username'])->where('pin', $credentials['password'])->first();

            $userFromApi = getAccounts()->where('username', $credentials['username'])->where('password', $credentials['password'])->first();

            // $userFromApi = userMapping(getUsers())->where('username', $credentials['username'])->where('password', $credentials['password'])->first();

            // $userFromApi = userMapping(getUsers())->filter(function (array $user) use ($credentials) {
            //     return $user['email'] == $credentials['identity'] || $user['username'] == $credentials['identity'] && $user['password'] == $credentials['password'];
            // })->first();

            if ($userFromApi) {

                $createdUser = User::create([
                    'username' => $userFromApi['username'],
                    'password' => $userFromApi['password'],
                    'type' => 'internal',
                ]);

                // UserRole::create([
                //     'role_id' => 3,
                //     'user_id' => $createdUser['id'],
                // ]);

                Auth::login($createdUser);

                $request->session()->regenerate();

                return redirect()->intended('dashboard');
            }
        }

        return back()->with('loginError', 'Username tersebut tidak ada atau tidak aktif');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('login');
    }
}

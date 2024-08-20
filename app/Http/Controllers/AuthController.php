<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (! Auth::attempt($request->only(['email', 'password']), $request->remember)) {
            return response()->json([
                'errors' => [
                    'email' => ['Podane dane są nieprawidłowe.'],
                ]
            ], 401);
        }

        return response()->json([
            'message' => 'Zostałeś zalogowany.',
            'action' => 'redirect',
            'url' => route('videos.index'),
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'message' => 'You have been logged out.',
            'action' => 'redirect',
            'url' => route('dashboard'),
        ]);
    }

    public function register(Request $request)
    {
        $errors = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);
        

        $user = User::create($request->only(['name', 'email', 'password']));

        Auth::login($user);

        
        return response()->json([
            'message' => 'Zostałeś zarejestrowany.',
            'action' => 'redirect',
            'url' => route('videos.index'),
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        $myGames = Auth::user()->myGames ?? [];
        $user = Auth::user()->name ?? '';
        return view('home', compact('games', 'myGames', 'user')); 
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email ou senha incorretos.',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        Auth::login($user);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function buyGames(Request $request)
    {
        $user = Auth::user();
        $gameId = $request->input('game_id');
        $userGames = $user->myGames ?? [];
        $userGames[] = $gameId;
        $user->myGames = array_unique($userGames);
        $user->save();

        return redirect('/')->with('success', 'Game purchased successfully!');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProacaController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            $teams = \App\Team::all();
            
            $data = [
                'user' => $user,
                'teams' => $teams,
            ];
        }
        return view('welcome', $data);
    }
    
    public function users()
    {
        $user = \Auth::user();
        $players = $user->favorites()->get();
        return view('users', ['players' => $players]);
    }
    
    public function ranking()
    {
        return view('ranking');
    }
    
    public function players($id)
    {
        $team = \App\Team::find($id);
        $players = \App\Player::where('team_id', $id)->orderBy('number')->get();
        
        $data = [
            'team' => $team,
            'players' => $players,
        ];
        
        return view('players', $data);
    }
}

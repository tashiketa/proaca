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
    
    public function ranking()
    {
        $players = \App\Player::all();
        $player1 = \App\Player::find(1); 
        $player2 = \App\Player::find(2); 
        $player3 = \App\Player::find(3);
        
        foreach ($players as $player) {
            if ($player->count() > $player1->count()) {
                $player1 = $player;
            } elseif ($player->count() > $player2->count() && $player != $player1) {
                $player2 = $player;
            } elseif ($player->count() > $player3->count() && $player != $player1 && $player != $player2) {
                $player3 = $player;
            } 
        }
        $data = [
            'player1' => $player1,
            'player2' => $player2,
            'player3' => $player3,
        ];
        return view('ranking', $data);
    }
    
    public function users()
    {
        $user = \Auth::user();
        $players = $user->favorites()->get();
        return view('users', ['players' => $players]);
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

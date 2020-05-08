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
        return view('users');
    }
    
    public function ranking()
    {
        return view('ranking');
    }
}

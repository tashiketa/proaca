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
            
            $data = [
                'user' => $user,
            ];
        }
        return view('welcome', $data);
    }
}

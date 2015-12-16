<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class GameController extends Controller
{

    public function show()
    {
        return view('game.dashboard');
    }
}
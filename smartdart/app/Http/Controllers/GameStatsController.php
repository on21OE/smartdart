<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameStatsController extends Controller
{
    public function showStats() {
        $user = Auth::user();

        $data = Game::where("userId", "=", $user->id)->orderBy("id", "desc")->first();
        
        return view('gameStats', compact("data"));
    }

    public function saveGame(Request $request) {
        $user = Auth::user();
        $thrownDarts = $request->thrownDarts;
        $bestScore = $request->bestScore;
        $average = $request->average;

        Game::insert([
            "userId" => $user->id,
            "thrownDarts" => $thrownDarts,
            "bestScore" => $bestScore,
            "average" => $average 
        ]);

        return redirect()->route("gameStats");
    }
}

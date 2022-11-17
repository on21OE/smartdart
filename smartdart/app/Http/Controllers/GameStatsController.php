<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameStatsController extends Controller
{
    public function showStats() {
        $user = Auth::user();

        // $data = GameStatistics::where('userId', '=', 1)->first();

        $data = DB::table("games")->where("userId", "=", $user->id)->orderBy("id", "desc")->first();
        
        return view('gameStats', compact("data"));
    }

    public function addGame(Request $request) {
       /*$user = Auth::user();

        $userId = $user->id;
        $thrownDarts = $request->input("thrownDarts");
        $bestScore = $request->input("bestScore");
        $average = $request->input("average");

        $newGame = new GameStatsController();
        $newGame->userId = $userId;
        $newGame->thrownDarts = $thrownDarts;
        $newGame->bestScore = $bestScore;
        $newGame->average = $average;
        $newGame->save(); */

        return view('addGame');
    }

    public function saveGame(Request $request) {
        $user = Auth::user();
        $thrownDarts = $request->thrownDarts;
        $bestScore = $request->bestScore;
        $average = $request->average;

        DB::table("games")->insert([
            "userId" => $user->id,
            "thrownDarts" => $thrownDarts,
            "bestScore" => $bestScore,
            "average" => $average 
        ]);

        return redirect()->route("gameHistory");
    }
}

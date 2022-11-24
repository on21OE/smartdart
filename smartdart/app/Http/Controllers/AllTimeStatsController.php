<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllTimeStatsController extends Controller
{
    public function showAllTimeStats() {
        $user = Auth::user();

        // $data = GameStatistics::where('userId', '=', 1)->first();

        $totalGames = Game::where("userId", "=", $user->id)->count();

        $thrownDarts =  Game::where("userId", "=", $user->id)->sum("thrownDarts");

        $average =  Game::where("userId", "=", $user->id)->sum("average") /Game::where("userId", "=", $user->id)->count();

        $bestScore =  Game::where("userId", "=", $user->id)->max("bestScore");


        $users = User::whereNot('name', '=', $user->name)->where('areStatsPublic', '=', 0)->get();

        $dataArray = array($totalGames, $thrownDarts, $average, $bestScore, $users);
        
        return view('allTimeStats', ["dataArray" => $dataArray]);
    }

    public function getOtherUserStats(Request $request) {
        
        $userId = User::where('name', '=', $request->name)->value('id');

            $totalGamesOtherUser = 0;

            $thrownDartsOtherUser = 0;

            $averageOtherUser = 0;

            $bestScoreOtherUser = 0;

        if(Game::where("userId", "=", $userId)->count() !== 0) {
            $totalGamesOtherUser =  Game::where("userId", "=", $userId)->count();

            $thrownDartsOtherUser =  Game::where("userId", "=", $userId)->sum("thrownDarts");

            $averageOtherUser =  Game::where("userId", "=", $userId)->sum("average") / Game::where("userId", "=", $userId)->count();

            $bestScoreOtherUser =  Game::where("userId", "=", $userId)->max("bestScore");
        }
        
        return response()->json([
            "totalGames" => $totalGamesOtherUser,
            "thrownDarts" => $thrownDartsOtherUser,
            "average" => $averageOtherUser,
            "bestScore" => $bestScoreOtherUser
        ]);
    }

    public function editAreStatsPublic(Request $request) {
        $user = Auth::user();
        
        $user->areStatsPublic = $request->value;
        $user->save();

        return redirect()->route("allTimeStats");
    }
}

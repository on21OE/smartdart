<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AllTimeStatsController extends Controller
{
    public function showAllTimeStats() {
        $user = Auth::user();

        // $data = GameStatistics::where('userId', '=', 1)->first();

        $totalGames = DB::table("games")->where("userId", "=", $user->id)->count();

        $thrownDarts = DB::table("games")->where("userId", "=", $user->id)->sum("thrownDarts");

        $average = DB::table("games")->where("userId", "=", $user->id)->sum("average") / DB::table("games")->where("userId", "=", $user->id)->count();

        $bestScore = DB::table("games")->where("userId", "=", $user->id)->max("bestScore");


        $users = DB::table("users")->whereNot('name', '=', $user->name)->get();

        $dataArray = array($totalGames, $thrownDarts, $average, $bestScore, $users);



        //$data = DB::table("games")->where("userId", "=", $user->id)->orderBy("id", "desc")->first();
        
        return view('allTimeStats', ["dataArray" => $dataArray]);
    }

    public function getOtherUserStats(Request $request) {

        $user = Auth::user();

        $userId = DB::table('users')->where('name', '=', $request->name)->value('id');

        $totalGamesOtherUser = DB::table("games")->where("userId", "=", $userId)->count();

        $thrownDartsOtherUser = DB::table("games")->where("userId", "=", $userId)->sum("thrownDarts");

        $averageOtherUser = DB::table("games")->where("userId", "=", $userId)->sum("average") / DB::table("games")->where("userId", "=", $userId)->count();

        $bestScoreOtherUser = DB::table("games")->where("userId", "=", $userId)->max("bestScore");

        return response()->json([
            "totalGames" => $totalGamesOtherUser,
            "thrownDarts" => $thrownDartsOtherUser,
            "average" => $averageOtherUser,
            "bestScore" => $bestScoreOtherUser
        ]);
    }
}

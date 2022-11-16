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


        $totalGamesOtherUser = DB::table("games")->where("userId", "=", 2)->count();

        $thrownDartsOtherUser = DB::table("games")->where("userId", "=", 2)->sum("thrownDarts");

        $averageOtherUser = DB::table("games")->where("userId", "=", 2)->sum("average") / DB::table("games")->where("userId", "=", 2)->count();

        $bestScoreOtherUser = DB::table("games")->where("userId", "=", 2)->max("bestScore");


        
        $dataArray = array($totalGames, $thrownDarts, $average, $bestScore, $totalGamesOtherUser, $thrownDartsOtherUser, $averageOtherUser, $bestScoreOtherUser);



        //$data = DB::table("games")->where("userId", "=", $user->id)->orderBy("id", "desc")->first();
        
        return view('allTimeStats', ["dataArray" => $dataArray]);
    }
}

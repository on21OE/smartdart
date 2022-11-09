<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameHistoryController extends Controller
{
    public function showHistory() {
        // $data = GameStatistics::get();

        $user = Auth::user();

        // $data = GameStatistics::where('userId', '=', 1)->first();

        $data = DB::table("games")->where("userId", "=", $user->id)->get();
        
        return view('gameHistory', compact("data"));
    }
}

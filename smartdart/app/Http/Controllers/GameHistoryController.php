<?php

namespace App\Http\Controllers;

use App\Models\GameHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class GameHistoryController extends Controller
{
    public function showHistory() {
        // $data = GameStatistics::get();

        $user = Auth::user();

        // $data = GameStatistics::where('userId', '=', 1)->first();

        $data = DB::table("games")->where("userId", "=", $user->id)->get();
        
        return view('gameHistory', compact("data"));
    }

    public function editHistory($id) {
        $data = DB::table("games")->where("id", "=", $id)->first();
        return view('editHistory', compact("data"));
    }

    public function updateHistory(Request $request) {
        $request->validate([
            "thrownDarts" => "required|integer",
            "bestScore" => "required|integer|lte:180",
            "average" => "required|numeric|lte:125"
        ]);
        
        $id = $request->id;
        $thrownDarts = $request->thrownDarts;
        $bestScore = $request->bestScore;
        $average = $request->average;

        DB::table("games")->where('id', '=', $id)->update([
            'thrownDarts' => $thrownDarts,
            'bestScore' => $bestScore,
            'average' => $average,
        ]);

        return redirect()->route("gameHistory")->with("success", "Game Edited Successfully");
    }

    public function deleteHistory($id) {
        DB::table("games")->where('id', '=', $id)->delete();
        return redirect()->route("gameHistory")->with("success", "Game Deleted Successfully");
    }
}

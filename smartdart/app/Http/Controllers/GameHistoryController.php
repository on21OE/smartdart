<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class GameHistoryController extends Controller
{
    public function showHistory() {
        $user = Auth::user();

        $data = Game::where("userId", "=", $user->id)->orderBy('id', 'desc')->simplePaginate(10);
        
        return view('gameHistory', compact("data"));
    }

    public function editHistory($id) {
        $data = Game::where("id", "=", $id)->first();
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

        Game::where('id', '=', $id)->update([
            'thrownDarts' => $thrownDarts,
            'bestScore' => $bestScore,
            'average' => $average,
        ]);

        return redirect()->route("gameHistory")->with("success", "Game Edited Successfully");
    }

    public function deleteHistory($id) {
        Game::where('id', '=', $id)->delete();
        return redirect()->route("gameHistory")->with("success", "Game Deleted Successfully");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserSettingsController extends Controller
{
    public function showSettings() {
        // $data = GameStatistics::get();

        //$user = Auth::user();

        // $data = GameStatistics::where('userId', '=', 1)->first();

        // $data = DB::table("games")->where("userId", "=", $user->id)->get();
        
    return view('userSettings', /* compact("data")*/);
    }

    public function changeUserName(Request $request) {
        $request->validate([
            "name"=>"required"
        ]);
        
        $userId = $request->id;

        $name = $request->name;

        User::where("id", "=", $userId->update([
            "name"=>$name
        ]));
        
    return view('userSettings', /* compact("data")*/);
    }
}

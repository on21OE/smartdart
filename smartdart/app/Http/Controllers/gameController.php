<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class gameController extends Controller
{
    public function create(Request $request)
    {
        $id = $request->input('id');

        // $user = DB::table('users')->find($id);
        $user = Auth::user();

        $name = $user->name;

        return view('test', ['name' => $name]);
    }
}

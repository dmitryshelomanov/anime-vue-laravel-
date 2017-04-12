<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers () {
        $users = User::simplePaginate(20);
        return view('users', ['users' => $users]);
    }
    public function upgradeToAdmin (Request $request) {
        $resault = User::where('id', '=', $request->id)->update(['role' => 2]);
        if ($resault) {
            return redirect()->back();
        }
    }
    public function upgradeToEditor (Request $request) {
        $resault = User::where('id', '=', $request->id)->update(['role' => 1]);
        if ($resault) {
            return redirect()->back();
        }
    }
    public function lowerToEditor (Request $request) {
        $resault = User::where('id', '=', $request->id)->update(['role' => 1]);
        if ($resault) {
            return redirect()->back();
        }
    }
    public function lowerToDeath (Request $request) {
        $resault = User::where('id', '=', $request->id)->update(['role' => 0]);
        if ($resault) {
            return redirect()->back();
        }
    }
    public function dropUser (Request $request) {
        $resault = User::where('id', '=', $request->id)->delete();
        if ($resault) {
            return redirect()->back();
        }
    }
}

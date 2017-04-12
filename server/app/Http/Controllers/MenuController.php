<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    public function getMenu () {
        return response()->json(
            Menu::with('subMenu')->get()
        );
    }
}


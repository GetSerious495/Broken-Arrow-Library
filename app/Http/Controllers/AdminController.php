<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Weapon;
use App\Models\Launcher;

class AdminController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function weapons()
    {
        $weapons = Weapon::with(['launchers'])->get();
        return view('weapons', compact('weapons'));
    }
}

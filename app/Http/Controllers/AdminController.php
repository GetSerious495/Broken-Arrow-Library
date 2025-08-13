<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Weapon;

class AdminController extends Controller
{
    public function index(){
        return view('home');
    }

    public function weapons(){

        $weapons = Weapon::all();

        return view('weapons', compact('weapons'));
    }
}

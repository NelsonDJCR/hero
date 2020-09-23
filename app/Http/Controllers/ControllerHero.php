<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHero extends Controller
{
    public function index()
    {
        return view('admin.heroes.index');
    }
}

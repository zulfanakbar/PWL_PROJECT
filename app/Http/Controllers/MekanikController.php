<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MekanikController extends Controller
{
    public function index() {
        return view('mekanik');
    }
}

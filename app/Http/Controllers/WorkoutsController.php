<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutsController extends Controller
{
    public function index()
    {
        return view('workouts');
    }
}

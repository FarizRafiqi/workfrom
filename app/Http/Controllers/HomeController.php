<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buildings = Building::with('images')->limit(3)->get();

        return view('home', compact('buildings'));
    }

    public function blog()
    {
        return view('pages.blog');
    }
}

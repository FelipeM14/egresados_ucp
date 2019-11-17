<?php

namespace App\Http\Controllers;

use App\Columns;
use App\Graduate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $programs = Graduate::select('programa')->get()->unique('programa')->count();
        $graduates = Graduate::all()->count();

        return view('home', ['graduates' => $graduates, 'programs' => $programs]);
    }
}

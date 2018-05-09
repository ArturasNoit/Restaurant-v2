<?php

namespace App\Http\Controllers;
use App\Main;
use App\Dish;
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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mains = Main::all();
        $promos = Dish::latest()->take(9)->get();
        return view('welcome', compact('mains', 'promos'));
    }

    public function showAdminPanel()
    {
        return view('admin');
    }
}

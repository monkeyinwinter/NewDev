<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function accueil ()
    {
        return view('arts');
    }

    public function profilPerso ()
    {
        return view('profilPerso');

    }
    public function profilAutres ()
    {
        return view('profilAutres');

    }
    public function mentionsLegales ()
    {
        return view('mentionsLegales');

    }
    public function CGU ()
    {
        return view('CGU');

    }
    public function resetPassword ()
    {
        return view('resetPassword');

    }
}
